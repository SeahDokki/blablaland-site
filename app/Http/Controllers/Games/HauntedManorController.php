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

class HauntedManorController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user   = Auth::user();
        $items  = collect([]);

        $items->add(Skin::whereHidden(0)->whereSpecial(SkinSpecial::HauntedManor)->orderBy('token')->get());
        $items->add(Power::whereHidden(0)->whereSpecial(PowerSpecial::HauntedManor)->orderBy('token')->get());

        $playerFlags    = Power::findOrFail(277)->players();
        $lastFlags      = $playerFlags->get()->reverse()->take(6);
        $flags          = $playerFlags->paginate(30);

        $rankings   = StatGame::whereGame('HAUNTED_MANOR')->orderBy('score', 'desc')->paginate(30);
        $statGame   = $user ? StatGame::whereGame('HAUNTED_MANOR')->firstWhere('player_id', $user->player->id) : null;

        return view('games.haunted-manor', compact('user', 'items', 'flags', 'lastFlags', 'rankings', 'statGame'));
    }
}
