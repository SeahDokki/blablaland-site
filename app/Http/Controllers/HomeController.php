<?php

namespace App\Http\Controllers;

use App\Models\Admin\News;
use App\Models\Artwork;
use App\Models\Forum\Post;
use App\Models\Forum\Section;
use App\Models\Forum\Topic;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $user       = Auth::user();
        $firstLogin = false;

        $previousRoute = app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();

        if ($user && $previousRoute === 'login' && (!isset($user->website_last_at) || !$user->website_last_at->isSameDay(now()))) {
            $user->update(['website_last_at' => now()]);
            $user->player->blabillon += 100;
            $user->player->save();

            $firstLogin = true;
        }

        $news = News::wherePublished(1)
            ->orderByDesc('created_at')
            ->get();

        $littleNews = Section::find(3)
            ->topics
            ->sortByDesc('created_at');

        $lastTopics = Topic::whereHas('section', function ($query) {
            $query->where('view_grade_id', '<=', Auth::check() ? Auth::user()->grade_id : 0);
        })->orderByDesc('created_at')
            ->limit(5)
            ->get();

        $lastPosts  = Post::whereHas('topic.section', function ($query) {
            $query->where('view_grade_id', '<=', Auth::check() ? Auth::user()->grade_id : 0);
        })->orderByDesc('created_at')
            ->limit(5)
            ->get();

        $artworks = Artwork::orderByDesc('created_at')->limit(4)->get();

        return view('index', compact('firstLogin', 'littleNews', 'lastTopics', 'lastPosts', 'news', 'artworks'));
    }
}
