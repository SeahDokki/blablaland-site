<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Blablaland\StatGame;
use App\Models\Group;
use App\Models\Skin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkinController extends Controller
{
    /**
     * @return View|Factory|Application
     */
    public function index(): View|Factory|Application
    {
        $groups = $this->listGroups();
        $skins = $this->listSkins();

        return view('shop.skins.index', compact('groups', 'skins'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse|void
     */
    public function redirect(Request $request)
    {
        if ($request->giveme) {
            return redirect()->route('shop.skin.show', $request->giveme);
        } else if ($request->gr) {
            return redirect()->route('shop.skin.group', $request->gr);
        }

        return redirect()->route('shop.skin.index');
    }

    /**
     * @param Skin $skin
     * @return Application|Factory|View
     */
    public function show(Skin $skin): View|Factory|Application
    {
        $user = Auth::user();

        if (!$skin->hidden) {
            $groups = $this->listGroups();
            $skins = $this->listSkins();

            return view('shop.skins.index', compact('user', 'skin', 'groups', 'skins'));
        }
        abort(404);
    }

    /**
     * @param Group $group
     * @return Application|Factory|View
     */
    public function group(Group $group): View|Factory|Application
    {
        $groups = $this->listGroups();
        $skins = $this->listSkins(null, $group->id);

        return view('shop.skins.index', compact('groups', 'skins'));
    }

    /**
     * @param $search
     * @return Application|Factory|View
     */
    public function filter(Request $request): View|Factory|Application
    {
        $request->validate([
            'search' => ['max:150']
        ]);

        $groups = $this->listGroups();
        $skins = $this->listSkins($request->search);

        return view('shop.skins.index', compact('groups', 'skins'));
    }

    /**
     * @return Collection
     */
    private function listGroups(): Collection
    {
       return Group::all()->sortBy('name');
    }



    /**
     * @param Request $request
     * @param Skin $skin
     * @return RedirectResponse
     */
    public function store(Request $request, Skin $skin)
    {
        $user = Auth::user();
        $status = null;
        $type = 'danger';

        if ($skin->hidden || $skin->unaivailable) {
            $status = 'Ce skin n\'est pas disponible à l\'achat.';
        } else if ($skin->price > $user->player->blabillon) {
            $status = 'Vous n\'avez pas assez de BBL pour acheter ce skin.';
        } else if ($user->player->skins->contains($skin)) {
            $status = 'Vous possédez déjà ce skin.';
        }

        if ($skin->token && !$status) {
            if (!$this->checkToken($skin)) {
                $status = 'Vous n\'avez pas assez de jetons pour effectuer cet achat.';
            }
        }

        if (!$status) {
            $user->player->skins()->attach($skin, [
                'color' => $skin->color
            ]);
            /*
             * We offer the skins as gifts
             */
            foreach ($skin->isAGift as $present) {
                if (!$user->player->skins->contains($present)) {
                    $user->player->skins()->attach($present, [
                        'color' => $present->color
                    ]);
                }
            }

            foreach ($skin->powers as $power) {
                $power->attach($power->pivot->quantity, false);
            }

            $user->player->blabillon -= $skin->price;
            $user->player->save();

            $status = 'Tu as maintenant ' . $user->player->blabillon . ' Blabillons';
            $type   = 'success';
        }
        return redirect()->route('shop.skin.index')
            ->with([
                'status' => $status,
                'type' => $type
            ]);
    }

    /**
     * @param $name
     * @param $groupId
     * @return mixed
     */
    private function listSkins($name = null, $groupId = null): mixed
    {
        $skins = Skin::with('giftSkins')
            ->whereDoesntHave('isAGift')
            ->whereHidden(0);

        if ($name) {
            $skins->where('name', 'LIKE', '%' . $name . '%');
        }
        if ($groupId) {
            $skins->whereGroupId($groupId);
        }
        return $skins->orderByDesc('id')->paginate(25);
    }

    /**
     * @param Skin $skin
     * @return bool
     */
    private function checkToken(Skin $skin): bool
    {
        $user       = Auth::user();
        $authorize  = false;
        $stats      = StatGame::whereGame($skin->special->value)
            ->wherePlayerId($user->player->id)
            ->first();

        if ($stats) {
            if ($skin->token <= $stats['remaining_token']) {
                $stats['remaining_token'] -= $skin->token;
                $stats->save();
                $authorize = true;
            }
        }

        return $authorize;
    }
}
