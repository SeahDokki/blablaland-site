<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Blablaland\StatGame;
use App\Models\Login;
use App\Models\Punishment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Forum\Post;
use App\Models\User;
use App\Tools\BBCode\BBCode;
use Illuminate\Support\Facades\Auth;

/**
 * Class AccountController
 * @package App\Http\Controllers\Account
 */
class AccountController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user = Auth::user();

        return view('account.index', compact('user'));
    }

    /**
     * @param User $user
     * @return Application|Factory|View
     */
    public function show(User $user): View|Factory|Application
    {
        if ($user->signature) {
            $user->signature = resolve(BBCode::class)->parseDefault($user->signature);
        } else {
            $user->signature = 'Aucune signature...';
        }


        $statTournament     = $user->player->stats('TOURNAMENT_FURY');
        $posTournamentFury  = StatGame::whereGame('TOURNAMENT_FURY')
                                ->where('score', '>', $user->player->stats('TOURNAMENT_FURY')->score ?? 0)
                                ->count() + 1;

        $lastPosts          = Post::whereHas('topic.section', function ($query) {
                $query->where('view_grade_id', '<=', Auth::check() ? Auth::user()->grade_id : 0);
            })->where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->limit(12)
            ->get();

        $IPlogins = Login::whereUserId($user->id)
            ->groupBy('ip_address')
            ->get();

        return view('account.public', compact('user', 'statTournament', 'posTournamentFury', 'lastPosts', 'IPlogins'));
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function signature(User $user): RedirectResponse
    {
        $moderator  = Auth::user();
        $type       = 'danger';
        $status     = 'Impossible de supprimer la signature.';
        $contain    = 'Signature supprimée par un modérateur';

        if ($user->signature && $user->signature != $contain && $user->grade_id < $moderator->grade_id) {
            $type   = 'success';
            $status = 'Signature supprimée avec succès.';

            Punishment::create([
                'reason'        => "Suppression signature => $user->signature",
                'duration'      => 0,
                'type'          => 'INFO',
                'player_id'     => $user->id,
                'moderator_id'  => $moderator->id,
            ]);

            $user->signature = $contain;
            $user->save();
        }

        return redirect()->route('user.show', $user)->with([
            'type'   => $type,
            'status' => $status
        ]);
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function ban(Request $request, User $user): RedirectResponse
    {
        $moderator  = Auth::user();

        $request->validate([
            'duration'  => 'required|min:1|max:999',
            'reason'    => 'required'
        ]);

        if ($request->duration >= 999) {
           if ($moderator->grade->rights()->where('name', 'MASSBAN')->first()) {
               $request->duration = 99999999;
           } else {
               $request->duration = 360;
           }
        }

        if ($moderator->grade_id >= 90) {
            $user->player->reason_ban       = $moderator->username . " t'envoie en prison => ". $request->duration ."mn de prison : " . $request->reason;
            $user->player->experience_ban   = $user->player->experience + ($request->duration + ($request->duration * 0.2));

            Punishment::create([
                'reason'        => $request->reason,
                'duration'      => $request->duration,
                'type'          => 'BAN',
                'player_id'     => $user->id,
                'moderator_id'  => $moderator->id,
            ]);

            $user->player->save();

            return redirect()->route('user.show', $user)->with([
                'type'   => 'success',
                'status' => 'Banni avec succès'
            ]);
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse*
     */
    public function redirect(Request $request)
    {
        return redirect()->route('user.show', $request->p);
    }
}
