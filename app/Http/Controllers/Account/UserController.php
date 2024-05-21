<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Punishment;
use App\Rules\BadString;
use App\Rules\CheckPassword;
use App\Rules\UniquePseudo;
use App\Tools\SocketMessage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 * @package App\Http\Controllers\Account
 */
class UserController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $user = Auth::user();
        $countries = Country::all();
        return view('account.user', compact('user', 'countries'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $user       = $request->user();
        $validator  = $request->validate([
            'pseudo'        => ['required', 'min:3', 'max:10', new UniquePseudo, new BadString, 'regex:/^[A-Za-z0-9_-]*$/'],
            'gender'        => 'required|in:0,1,2',
            'country_id'    => ['required', 'exists:countries,id'],
            'website'       => ['nullable', 'url:http,https'],
            'old_password'  => [new CheckPassword($request)],
            'password'      => ['min:6', 'max:20', 'confirmed'],
        ]);

        $showFriend         = isset($request->show_friend) ? 1 : 0;
        $showWedding        = isset($request->show_wedding) ? 1 : 0;
        $user->gender       = $request['gender'];
        $user->country_id   = $request['country_id'];
        $user->website      = $request['website'];

        if (isset($request['pseudo']) && $user->player->pseudo != $request['pseudo']) {
            Punishment::create([
                'reason'        =>  "Changement de pseudo ({$user->player->pseudo} => {$request['pseudo']})",
                'duration'      => 0,
                'type'          => 'INFO',
                'player_id'     => $user->id,
                'moderator_id'  => 2,
            ]);
            $user->player->pseudo = $request['pseudo'];

            $socketMessage = new SocketMessage(11, 6);
            $socketMessage->kick($user, "Changement de pseudo (${request['pseudo']})");
        }
        if ($request['new_password'] && $request['new_password_confirmation']) {
            $user->password = Hash::make($request['new_password']);
        }
        if ($showFriend != $user->show_friend) {
            $user->show_friend = $showFriend;
        }
        if ($showWedding != $user->show_wedding) {
            $user->show_wedding = $showWedding;
        }
        $user->player->save() && $user->save();

        return redirect()->back()->with([
            'type'   => 'success',
            'status' => "Vos informations ont été mis à jour avec succès."
        ]);
    }
}
