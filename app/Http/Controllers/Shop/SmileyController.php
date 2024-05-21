<?php

namespace App\Http\Controllers\Shop;

use App\Models\Smiley;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SmileyController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $smileys = $this->listSmileys();

        return view('shop.smileys.index', compact('smileys'));
    }

    /**
     * @param Smiley $smiley
     * @return Application|Factory|View|void
     */
    public function show(Smiley $smiley)
    {
        $user = Auth::user();

        if (!$smiley->hidden) {
            $smileys = $this->listSmileys();

            return view('shop.smileys.index', compact('user', 'smiley', 'smileys'));
        }
        abort(404);
    }

    /**
     * @param Request $request
     * @param Smiley $smiley
     * @return RedirectResponse
     */
    public function store(Request $request, Smiley $smiley): RedirectResponse
    {
        $user = Auth::user();
        $status = null;
        $type = 'danger';

        if ($smiley->hidden || $smiley->unaivailable) {
            $status = 'Ce pack n\'est pas disponible à l\'achat.';
        } else if ($smiley->price > $user->player->blabillon) {
            $status = 'Vous n\'avez pas assez de BBL pour acheter ce pack.';
        } else if ($user->player->smileys->contains($smiley)) {
            $status = 'Vous possédez déjà ce pack.';
        }

        if (!$status) {
            $smiley->attach(true);

            $user->player->blabillon -= $smiley->price;
            $user->player->save();

            $status = 'Tu as maintenant ' . $user->player->blabillon . ' Blabillons';
            $type   = 'success';
        }
        return redirect()->route('shop.smiley.index')
            ->with([
                'status' => $status,
                'type' => $type
            ]);
    }

    /**
     * @param $name
     * @param $gender
     * @return mixed
     */
    private function listSmileys($name = null, $gender = null): mixed
    {
        $smileys = Smiley::whereHidden(0)
            ->where('price', '>', 0);

        if ($name) {
            $smileys->where('name', 'LIKE', '%' . $name . '%');
        }

        return $smileys->orderByDesc('id')->paginate(25);
    }
}
