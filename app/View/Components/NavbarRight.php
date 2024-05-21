<?php

namespace App\View\Components;

use App\Models\Forum\Post;
use App\Models\Player;
use App\Models\Skin;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class NavbarRight extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|\Closure|string
     */
    public function render(): View|string|\Closure
    {
        $skinRandom = Skin::inRandomOrder()->whereHidden(0)->first();
        $players    = Player::get()->sortByDesc('experience')->take(3);
        $lastPosts  = Post::whereHas('topic.section', function ($query) {
            $query->where('view_grade_id', '<=', Auth::check() ? Auth::user()->grade_id : 0);
        })->orderByDesc('created_at')
            ->limit(5)
            ->get();

        return view('components.navbar-right', compact('skinRandom', 'lastPosts', 'players'));
    }
}
