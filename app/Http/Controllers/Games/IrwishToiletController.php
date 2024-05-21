<?php

namespace App\Http\Controllers\Games;

use App\Enums\PowerSpecial;
use App\Enums\SkinSpecial;
use App\Http\Controllers\Controller;
use App\Models\Power;
use App\Models\Skin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IrwishToiletController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $items = collect([]);
        $items->add(Skin::whereHidden(0)->whereSpecial(SkinSpecial::IrwishToilet)->orderBy('token')->get());
        $items->add(Power::whereHidden(0)->whereSpecial(PowerSpecial::IrwishToilet)->orderBy('token')->get());

        $playerFlags    = Power::findOrFail(199)->players();
        $lastFlags      = $playerFlags->get()->reverse()->take(6);
        $flags          = $playerFlags->paginate(30);

        return view('games.irwish-toilet', compact('flags', 'lastFlags', 'items'));
    }
}
