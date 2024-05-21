<?php

namespace App\Http\Controllers\Games;

use App\Enums\PowerSpecial;
use App\Enums\SkinSpecial;
use App\Http\Controllers\Controller;
use App\Models\Blablaland\StatGame;
use App\Models\Power;
use App\Models\Skin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PyramidController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user   = Auth::user();
        $items  = collect([]);

        $items->add(Skin::whereHidden(0)->whereSpecial(SkinSpecial::Pyramid)->orderBy('token')->get());
        $items->add(Power::whereHidden(0)->whereSpecial(PowerSpecial::Pyramid)->orderBy('token')->get());

        $playerFlags    = Power::findOrFail(187)->players();
        $lastFlags      = $playerFlags->get()->reverse()->take(6);
        $flags          = $playerFlags->paginate(30);

        $rankings   = StatGame::whereGame('PYRAMID')->orderBy('score', 'desc')->paginate(30);
        $statGame   = $user ? StatGame::whereGame('PYRAMID')->firstWhere('player_id', $user->player->id) : null;

        return view('games.pyramid', compact('user', 'items', 'flags', 'lastFlags', 'rankings', 'statGame'));
    }
}
