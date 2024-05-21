<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Blablaland\StatGame;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user       = Auth::user();
        $statGame   = StatGame::wherePlayerId($user->player->id)->first();
        $gameStats  = [];

        $games = [
            'PYRAMID', 'NAVAL_BATTLE', 'MYSTHORIA', 'HAUNTED_MANOR', 'DUNGEON'
        ];
        foreach ($games as $game) {
            $gameToken                          = $statGame ? $statGame->whereGame($game)->wherePlayerId($user->player->id)->first() : null;
            $gameStats[$game]['remainingToken'] = $gameToken ? $gameToken->remaining_token : 0;
            $gameStats[$game]['totalToken']     = $gameToken ? $gameToken->total_token : 0;
        }

        return view('account.token', compact('user', 'gameStats'));
    }
}
