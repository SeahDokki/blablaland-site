<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Power;
use App\Models\Skin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $items = collect([]);

        $items->add(Skin::whereHidden(0)
            ->orderByDesc('id')
            ->limit(4)
            ->get());

        $items->add(Power::whereHidden(0)
            ->orderByDesc('id')
            ->limit(4)
            ->get());

        return view('shop.index', compact('items'));
    }
}
