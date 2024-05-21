<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Affinity;
use App\Models\Player;
use App\Tools\SocketMessage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $user           = Auth::user();

        $friends        = $user->player->friends()->sortBy(fn ($friend) => $friend->getPlayerAffinity()->isConnected() ? 0 : 1);
        $friendsRequest = Affinity::whereType('FRIEND')->whereAccepted(0)->whereReceiverId($user->player->id)->get();
        $friendsSend    = Affinity::whereType('FRIEND')->whereAccepted(0)->whereSenderId($user->player->id)->get();

        return view('account.friends', compact('user', 'friends', 'friendsRequest', 'friendsSend'));
    }

    /**
     * @param Player $player
     * @param Request $request
     * @return RedirectResponse
     */
    public function sendAffinity(Player $player, Request $request): RedirectResponse
    {
        $user       = Auth::user();
        $friend     = $user->player->friend($player->id);
        $blackList  = $user->player->blackList($player->id);
        $type       = 'danger';
        $status     = null;

        if ($user->player->id === $player->id) {
            $status = 'Impossible de s\'inviter soi-même !!';
        } else if ($user->player->friends()->count() >= 40) {
            $status = 'Impossible, ta liste d\'amis est pleine :/';
        } else if ($player->friends()->count() >= 40) {
            $status = 'Impossible, sa liste d\'amis est pleine';
        } else if ($blackList && $blackList->sender_id == $player->id) {
            $status = 'Impossible de faire la demande, tu es dans la black liste de ce blabla';
        } else if ($friend) {
            if ($friend->receiver_id == $player->id && !$friend->accepted) {
                $status = 'Tu as déja fais cette demande d\'amis. Tu dois attendre que le blabla réponde.';
            } else if ($friend->accepted) {
                $status = 'Ce blabla est déja dans ta liste d\'amis ^^';
            } else {
                return $this->acceptAffinity($friend);
            }
        }

        if (empty($status)) {
            $type   = 'success';
            $status = 'Demande d\'ajout à la liste d\'amis transmise';

            Affinity::create([
                'sender_id' => $user->player->id,
                'receiver_id' => $player->id,
                'accepted' => 0,
                'type' => 'FRIEND'
            ]);

            $socketMessage = new SocketMessage(11, 4);
            $socketMessage->sendAffinity($user, $player->user, 1);
        }

        return redirect()->route('account.friend.index')->with([
            'type'      => $type,
            'status'    => $status,
        ]);
    }

    /**
     * @param Affinity $affinity
     * @return RedirectResponse
     */
    public function acceptAffinity(Affinity $affinity): RedirectResponse
    {
        $user       = Auth::user();
        $blackList  = $user->player->blackList($affinity->sender_id);
        $friend     = $user->player->friend($affinity->sender_id);
        $type       = 'danger';
        $status     = null;

        if ($affinity->receiver_id != $user->player->id) {
            $status = 'Vous n\'avez aucune demande de ce blabla';
        } else if ($friend && $friend->accepted) {
            $status = 'Vous êtes déjà ami avec ce blabla';
        } else if ($blackList && $blackList->sender_id == $affinity->sender_id) {
            $status = 'Ce blabla vous a mis dans sa black liste !!';
            $affinity->delete();
        } else if ($affinity->receiver->friends()->count() >= 40) {
            $status = 'Ta liste d\'amis est pleine';
        } else if ($affinity->sender->friends()->count() >= 40) {
            $status = 'La liste d\'amis de ce blabla est pleine';
        } else if (!$affinity->accepted && $affinity->type = 'FRIEND') {
                $type = 'success';
                $status = 'Vous êtes maintenant ami avec ' . $affinity->getPlayerAffinity()->pseudo . ' !';

                $affinity->accepted = 1;
                $affinity->save();

            $socketMessage = new SocketMessage(11, 4);
            $socketMessage->sendAffinity($user, $affinity->getPlayerAffinity()->user, 2);
        }

        return redirect()->route('account.friend.index')->with([
            'type'      => $type,
            'status'    => $status,
        ]);
    }

    /**
     * @param Affinity $affinity
     * @return RedirectResponse
     */
    public function deleteAffinity(Affinity $affinity): RedirectResponse
    {
        $user       = Auth::user();
        $type       = 'danger';
        $status     = 'Une erreur est survenue lors de la suppression';

        if ($affinity->sender_id === $user->player->id ||
                $affinity->receiver_id === $user->player->id &&
                $affinity->accepted && $affinity->type = 'FRIEND') {
            $type   = 'success';
            $status = 'Vous n\'êtes plus ami avec ' . $affinity->getPlayerAffinity()->pseudo;
            $affinity->delete();

            $socketMessage = new SocketMessage(11, 4);
            $socketMessage->sendAffinity($user, $affinity->getPlayerAffinity()->user, 3);
        }

        return redirect()->route('account.friend.index')->with([
            'type'      => $type,
            'status'    => $status,
        ]);
    }

    /**
     * @param Affinity $affinity
     * @return RedirectResponse
     */
    public function declineAffinity(Affinity $affinity): RedirectResponse
    {
        $user       = Auth::user();
        $type       = 'danger';
        $status     = 'Vous n\'avez aucune demande de ce blabla';

        if ($affinity->receiver_id === $user->player->id ||
            $affinity->sender_id === $user->player->id &&
            !$affinity->accepted && $affinity->type = 'FRIEND') {
            $type   = 'success';
            $status = 'La demande d\'ami de ' . $affinity->getPlayerAffinity()->pseudo . ' a bien été refusée';

            $affinity->delete();
        }

        return redirect()->route('account.friend.index')->with([
            'type'      => $type,
            'status'    => $status,
        ]);
    }

    /**
     * @param Affinity $affinity
     * @return RedirectResponse
     */
    public function cancelAffinity(Affinity $affinity): RedirectResponse
    {
        $user       = Auth::user();
        $type       = 'danger';
        $status     = 'Vous n\'avez fait aucune demande à ce blabla';

        if ($affinity->sender_id === $user->player->id
            && !$affinity->accepted && $affinity->type = 'FRIEND') {
            $type   = 'success';
            $status = 'La demande d\'ami à ' . $affinity->getPlayerAffinity()->pseudo . ' a bien été annulée';

            $affinity->delete();
        }

        return redirect()->route('account.friend.index')->with([
            'type'      => $type,
            'status'    => $status,
        ]);
    }
}
