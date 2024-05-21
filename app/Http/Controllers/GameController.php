<?php

namespace App\Http\Controllers;

use App\Models\Blablaland\TipMessage;
use App\Models\Blablaland\TipSecuMessage;
use App\Tools\Network;
use App\Tools\SocketMessage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class GameController
 * @package App\Http\Controllers
 */
class GameController extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|\Illuminate\Http\RedirectResponse|Application
    {
        $user = Auth::user();

        $tipMessage = urlencode(TipMessage::inRandomOrder()->get()->first()->message);
        $tipSecuMessage = urlencode(TipSecuMessage::inRandomOrder()->get()->first()->message);

        $socketMessage = new SocketMessage(11, 3);
        $socketMessage->allowIP($user ? $user->getIP() : Network::getIP());

        return view('game', compact('user', 'tipMessage', 'tipSecuMessage'));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse
     */
    public function light():  \Illuminate\Foundation\Application|View|Factory|\Illuminate\Http\RedirectResponse|Application
    {
        $user = Auth::user();

        $tipMessage = urlencode(TipMessage::inRandomOrder()->get()->first()->message);
        $tipSecuMessage = urlencode(TipSecuMessage::inRandomOrder()->get()->first()->message);

        return view('game-light', compact('user', 'tipMessage', 'tipSecuMessage'));
    }
}
