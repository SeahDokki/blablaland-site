<?php

namespace App\Http\Controllers\Auth;

use App\Enums\LoginType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Login;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return View
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();

            $request->session()->regenerate();

            $user = Auth::user();
            Login::create([
                'start_at'      => now(),
                'user_id'       => $user->id,
                'type'          => LoginType::WEBSITE,
                'ip_address'    => $user->getIP()
            ]);

            User::find(Auth::user()->id)
                ->player
                ->update([
                    'session' => Str::random(10)
                ]);

            // return redirect()->intended(RouteServiceProvider::HOME);
            return redirect()->to(RouteServiceProvider::HOME);
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors([
                'username' => trans('auth.failed')
            ]);
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        User::find(Auth::user()->id)->player->update(['session' => Str::random(10)]);

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
