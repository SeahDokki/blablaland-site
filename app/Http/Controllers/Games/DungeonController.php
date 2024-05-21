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
use Illuminate\Support\Facades\Auth;

class DungeonController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user   = Auth::user();
        $items  = collect([]);

        $items->add(Skin::whereHidden(0)->whereSpecial(SkinSpecial::Dungeon)->orderBy('token')->get());
        $items->add(Power::whereHidden(0)->whereSpecial(PowerSpecial::Dungeon)->orderBy('token')->get());

        $playerFlags    = Power::findOrFail(303)->players();
        $lastFlags      = $playerFlags->get()->reverse()->take(6);
        $flags          = $playerFlags->paginate(30);

        $rankings   = StatGame::whereGame('DUNGEON')->orderBy('score', 'desc')->paginate(30);
        $statGame   = $user ? StatGame::whereGame('DUNGEON')->firstWhere('player_id', $user->player->id) : null;

        return view('games.dungeon', compact('user', 'items', 'flags', 'lastFlags', 'rankings', 'statGame'));
    }
}
