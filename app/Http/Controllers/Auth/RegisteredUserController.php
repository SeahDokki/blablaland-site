<?php

namespace App\Http\Controllers\Auth;

use App\Enums\LoginType;
use App\Http\Controllers\Controller;
use App\Models\DiscordUser;
use App\Models\Login;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Rules\BadString;
use App\Rules\UniquePseudo;
use App\Tools\Network;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $state = $request->session()->get('state');
        return view('auth.register.index', compact('state'));
    }

    /**
     * @param string $token
     * @return View
     */
    public function create(string $token): View
    {
        $discordUser = DiscordUser::where('confirmation_token', $token)->first();

        if (!$discordUser || $discordUser['user_id']) {
            return abort(404);
        }
        return view('auth.register.create', compact('discordUser'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param Request $request
     *
     * @throws ValidationException
     */
    public function store(Request $request, string $token): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validate([
            'username'              => ['required', 'min:3', 'max:10', 'unique:users', new UniquePseudo, new BadString, 'regex:/^[A-Za-z0-9_-]*$/'],
            'email'                 => ['required', 'email', 'max:255', 'indisposable', 'regex:/^[^+]*$/', 'unique:users'],
            'password'              => ['required', 'min:6', 'max:20', 'confirmed', Rules\Password::defaults()],
            'rules'                 => ['required'],
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ], [
            'email.indisposable'    => 'Les adresses électroniques jetables ne sont pas autorisées.',
            'username.unique'       => "Ce login n'est pas disponible."
        ]);

        $error      = null;
        $ipAddress  = Network::getIP();
        $accounts   = Login::whereIpAddress($ipAddress)
                        ->groupBy('user_id')
                        ->get()
                        ->count();
        $discordUser = DiscordUser::where('confirmation_token', $token)
                        ->first();

        if (!$discordUser || $discordUser['user_id']) {
            $error = "Le token n'est pas valide !";
        }

        if (!$error) {
            try {
                $response = Http::withHeaders([
                    'X-Key' => env('IPHUB_API_KEY'),
                ])->get("http://v2.api.iphub.info/ip/$ipAddress");

                if ($accounts >= 5) {
                    $error = "Trop de comptes différents ont été utilisés à partir de cette adresse IP, ton inscription est donc impossible. Pour plus d'informations, contact l'équipe sur Discord.";
                } else if ($response->json()['block'] === 1) {
                    $error = "Adresse IP proxy détectée.";
                }
            } catch (\Exception $e) {
                $error = "Une erreur s'est produite lors de la requête vers l'Anti-VPN.";
            }
        }

        try {
            if (!$error) {
                $user = User::create([
                    'username'  => $request->username,
                    'email'     => $request->email,
                    'password'  => Hash::make($request->password),
                ]);
                $user->createPlayer();

                Login::create([
                    'start_at' => now(),
                    'user_id' => $user->id,
                    'type' => LoginType::WEBSITE,
                    'ip_address' => $user->getIP()
                ]);

                $discordUser->update(['user_id' => $user->id]);
                event(new Registered($user));

                Auth::login($user);
            }
        } catch (\Exception $e) {
            $error = 'Erreur lors de la soumission du formulaire';
        }

        if ($error) {
            return redirect()->route('register.create', $request['token'])->with([
                'type'      => 'danger',
                'status'    => $error,
            ]);
        } else {
           return redirect(RouteServiceProvider::HOME);
        }
    }
}
