<?php

namespace App\Http\Controllers\Shop;

use App\Enums\PowerType;
use App\Models\Blablaland\StatGame;
use App\Models\Power;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PowerController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $powers = $this->listPowers();

        return view('shop.powers.index', compact('powers'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse|void
     */
    public function redirect(Request $request)
    {
        if ($request->giveme) {
            return redirect()->route('shop.power.show', $request->giveme);
        }

        return redirect()->route('shop.power.index');
    }

    /***
     * @param Power $power
     * @return Application|Factory|View|void
     */
    public function show(Power $power)
    {
        $user = Auth::user();

        if (!$power->hidden) {
            $powers = $this->listPowers();

            return view('shop.powers.index', compact('user', 'power', 'powers'));
        }
        abort(404);
    }

    /**
     * @param int $id
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function gender(int $id): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $user = Auth::user();

        $powers = $this->listPowers(null, $id);

        return view('shop.powers.index', compact('user', 'powers'));
    }


    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function filter(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $request->validate([
            'search' => ['max:150']
        ]);

        $powers = $this->listPowers($request['search']);

        return view('shop.powers.index', compact('powers'));
    }

    /**
     * @param Request $request
     * @param Power $power
     * @return \Closure|RedirectResponse|mixed|object|null
     */
    public function store(Request $request, Power $power): mixed
    {
        $user = Auth::user();
        $status = null;
        $type = 'danger';
        $giveBBL = 0;

        if ($power['hidden'] || $power['unavailable']) {
            $status = 'Cet objet n\'est pas disponible à l\'achat.';
        } else if ($power['type'] === PowerType::OneTime) {
            if ($user->player->powers->contains($power)) {
                $status = 'Vous possédez déjà cet objet.';
            }
        } else {
            if ($power['type'] == PowerType::Pack) {
                $request['quantity'] = 1;
            }
            if (!$request['quantity'] || $request['quantity'] <= 0 || is_float($request['quantity'])) {
                $status = 'La quantité est invalide';
            } else {
                $power->price *= $request['quantity'];
            }
        }

        if ($power->price > $user->player->blabillon) {
            $status = 'Vous n\'avez pas assez de BBL pour effectuer cet achat.';
        }

        if ($power->token && !$status) {
            $response = $this->checkToken($power, $request['quantity'] ?? 1);
            [$hasEnoughTokens, $giveBBL] = [$response['authorize'], $response['value']];

            if (!$hasEnoughTokens) {
                $status = 'Vous n\'avez pas assez de jetons pour effectuer cet achat.';
            }
        }

        if (!$status) {
            $power->attach($request->quantity ?? 1);

            $user->player->blabillon -= $power->price;
            $user->player->blabillon += $giveBBL;
            $user->player->save();

            $status = "Tu as maintenant {$user->player->blabillon} Blabillons";
            $type = 'success';
        }

        return redirect()->refresh()->with([
            'status' => $status,
            'type' => $type
        ]);
    }


    /**
     * @param $name
     * @param $gender
     * @return mixed
     */
    private function listPowers($name = null, $gender = null): mixed
    {
        $powers = Power::whereHidden(0)->where('price', '>', 0);
        if ($name) {
            $powers->where('name_shop', 'LIKE', '%' . $name . '%');
        }
        if ($gender) {
            $powers->whereGender($gender);
        }

        return $powers->orderByDesc('id')->paginate(25);
    }

    /**
     * @param Power $power
     * @return array
     */
    private function checkToken(Power $power, int $quantity = 1): array
    {
        $user       = Auth::user();
        $response   = [
            'authorize' => false,
            'value' => 0
        ];

        $stats  = StatGame::whereGame($power->special->value)
            ->wherePlayerId($user->player->id)
            ->first();

        if ($stats) {
            $token = $power->token * $quantity;
            if ($token <= $stats['remaining_token']) {
                $stats['remaining_token'] -= $token;
                $stats->save();
                $response['authorize'] = true;
            }
        }

        if ($response['authorize']) {
            $user->player->save();
            $response['value'] = match ($power['id']) {
                312 => 11,
                278, 190, 196 => 10,
                253 => 160,
                default => null,
            };
        }

        return $response;
    }

}
