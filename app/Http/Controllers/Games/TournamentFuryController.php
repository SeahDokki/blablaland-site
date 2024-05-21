<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;
use App\Models\Blablaland\StatGame;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;

class TournamentFuryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|Factory|Application
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|Factory|Application
    {
        $user             = Auth::user();
        $tournamentFuries = StatGame::whereGame('TOURNAMENT_FURY')->orderBy('score', 'desc')->paginate(50);

        return view('games.tournament-fury', compact('user', 'tournamentFuries'));
    }
}
