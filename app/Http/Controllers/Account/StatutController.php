<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Blablaland\Statut;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatutController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $user = Auth::user();
        $statuts = Statut::where('experience', '<=', $user->player->experience)
            ->whereSpecial(0)
            ->get();
        foreach ($user->statuts as $statut) {
            $statuts->push($statut);
        }
        return view('account.statut', compact('user', 'statuts'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'statut_id' => ['required']
        ]);

        $statut = Statut::find($request->statut_id);
        $user = Auth::user();

        $isSpecialStatus = $statut ? $statut->special : false;
        $userHasStatus = $user->statuts->contains($request->statut_id);

        // Conditions to update the user's status
        if ($user->statut_id !== $request->statut_id) {
            if ($request->statut_id == 0 ||
                (!$isSpecialStatus && $user->player->experience >= ($statut ? $statut->experience : 0)) || $userHasStatus) {
                $user->statut_id = $request->statut_id != 0 ? $request->statut_id : null;
                $user->save();
            }
        }

        $error = $user->statut_id !== $request->statut_id;
        $statut = $statut ? $statut->name : 'Automatique';

        return redirect()->back()->with([
            'type'   => $error ? 'danger' : 'success',
            'status' => $error ? "Impossible d'enregistrer le statut" : "Vous avez maintenant le statut $statut !"
        ]);
    }
}
