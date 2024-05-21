<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Punishment;
use App\Rules\BadString;
use App\Rules\UniquePseudo;
use App\Tools\SocketMessage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserController
 * @package App\Http\Controllers\Account
 */
class UsernameController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $user = Auth::user();
        return view('account.username', compact('user'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $user       = $request->user();
        $validator  = $request->validate([
            'username' => ['required', 'min:3', 'max:10', 'unique:users', new UniquePseudo, new BadString, 'regex:/^[A-Za-z0-9_-]*$/'],
        ], [
            'username.unique' => "Ce login n'est pas disponible.",
        ]);

        if ($user->player->experience <= 500) {
            return redirect()->back()->with([
                'type'   => 'danger',
                'status' => 'Tu dois avoir au minimum 500 XP.',
            ]);
        }

        if (isset($request['username']) && $user->username != $request['username']) {
            Punishment::create([
                'reason'        =>  "Changement de login ({$user->username} => {$request['username']})",
                'duration'      => 0,
                'type'          => 'INFO',
                'player_id'     => $user->id,
                'moderator_id'  => 2,
            ]);

            $user->username = $request['username'];
            $user->save();

            $socketMessage = new SocketMessage(11, 6);
            $socketMessage->kick($user, "Changement de login (${request['username']})");
        }

        return redirect()->back()->with([
            'type'   => 'success',
            'status' => "Votre login a été mis à jour avec succès."
        ]);
    }
}
