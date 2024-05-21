<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class AvatarController extends Controller
{
    /**
     * index
     *
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user = Auth::user();
        return view('account.avatar', compact('user'));
    }


    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'avatar' => 'required|image|max:300',
        ], [
            "avatar.image" => "Le format de l'image n'est pas accepté. Formats autorisés : JPG, GIF, PNG.",
            "avatar.max" => "L'image a un poid trop grand, 300ko maximum.",
        ]);

        $user = Auth::user();

        $path = $request->file('avatar')->store('public/avatars');
        ImageManager::imagick()->read(Storage::path($path))->resize(90, 90)->save(Storage::path($path));

        if ($user->avatar != "public/avatars/default.png") {
            Storage::delete($user->avatar);
        }

        $user->avatar = $path;
        $user->save();

        return redirect()->back()->with([
            'type'   => 'success',
            'status' => "Votre avatar a été mis à jour avec succès."
        ]);
    }
}
