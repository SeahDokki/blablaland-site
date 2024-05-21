<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class SignatureController
 * @package App\Http\Controllers\Account
 */
class SignatureController extends Controller
{
    /**
     * index
     *
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user = Auth::user();
        return view('account.signature', compact('user'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $user = Auth::user();
        if ($request->signature != $user->signature) {
            $user->signature = $request->signature;
            $user->save();
        }
        return redirect()->back()->with([
            'type'   => 'success',
            'status' => 'Votre signature a été mis à jour avec succès.'
        ]);    }
}
