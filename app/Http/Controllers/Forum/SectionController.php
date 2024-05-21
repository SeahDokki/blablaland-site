<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Forum\Section;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

/**
 * Class SectionController
 * @package App\Http\Controllers\Forum
 */
class SectionController extends Controller
{
    /**
     * @param Section $section
     * @return View|Factory|Application
     */
    public function index(Section $section): View|Factory|Application
    {
        if (!session()->has('section_viewed_' . $section['id'])) {
            // Mark the section as viewed in this session
            session()->put('section_viewed_' . $section['id'], true);
        }

        $user = Auth::user();
        foreach ($section->sections as $item) {
            $item->topicsCount = $item->topics()->count();
            foreach ($item->topics as $topics) {
                $item->postsCount += $topics->posts->count();
            }
            $topics = $item
                ->topics()->orderByDesc('updated_at')->first();
            if ($topics) {
                $item->lastPost = $topics
                    ->posts()->orderByDesc('created_at')->first();
            }
        }

        $topics = $section->topics()
            ->select('topics.*')
            ->leftJoin('posts', 'posts.topic_id', '=', 'topics.id')
            ->selectRaw('MAX(posts.created_at) as latest_post_date')
            ->orderByDesc('pinned')
            ->orderByDesc('latest_post_date')
            ->groupBy('topics.id')
            ->paginate(30);

        return view('forum.section.index', compact('section','topics', 'user'));
    }
}
