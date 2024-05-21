<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Rules\BadString;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user = Auth::user();
        return view('account.tags', compact('user'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $user = Auth::user();

        $request->validate([
            'tag' => ['required', 'min:3', 'max:20', new BadString]
        ]);

        // Check if the user already has two tags
        if ($user->tags()->count() >= 30) {
            return redirect()->route('account.tag.index')->with([
                'type'   => 'danger',
                'status' => "Vous avez déjà atteint la limite de tags permise."
            ]);
        }

        $colors = ['#95CC00', '#FF9B05', '#B18EC3', '#601786', '#0354E1'];
        $color = $colors[array_rand($colors, 1)];

        $tag = Tag::whereName($request->tag)->first();

        if (!$tag) {
            $tag            = new Tag;
            $tag->name      = $request->tag;
            $tag->color     = $color;
            $tag->save();
        }

        $user->tags()->syncWithoutDetaching($tag);

        return redirect()->route('account.tag.index')->with([
            'type'   => 'success',
            'status' => "Vous avez maintenant le tag $request->tag !"
        ]);
    }

    /**
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function destroy(Tag $tag): RedirectResponse
    {
        $user = Auth::user();
        $user->tags()->detach($tag);
        if ($tag->users()->count() === 0) {
            $tag->delete();
        }
        return redirect()->route('account.tag.index');
    }
}
