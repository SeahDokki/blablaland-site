<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Forum\Category;
use App\Models\Forum\Section;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Forum
 */
class CategoryController extends Controller
{
    /**
     * @return Application|Factory|View
     */
   public function index(): View|Factory|Application
   {
       $user        = Auth::user();
       $categories = Category::with(['sections.topics.posts'])
           ->where('grade_id', '<=', $user ? $user->grade_id : 0)
           ->get();

       $categories->each(function ($category) use ($user) {
           $category->sections = $category->sections->reject(function ($section) use ($user) {
               return $section->view_grade_id > ($user ? $user->grade->id ?? 0 : 0);
           });

           $category->sections->each(function ($section) {
               $this->calculateSectionInfo($section);
           });
       });

       return view('forum.index', compact('categories'));
   }

    /**
     * @param Section $section
     * @return void
     */
    private function calculateSectionInfo(Section $section): void
    {
        $section['topicsCount'] = $section->topics->count();
        $section['postsCount'] = 0;
        $latestPost = null;

        foreach ($section->topics as $topic) {
            $section['postsCount'] += $topic->posts->count();
            $latestTopicPost = $topic->posts->sortByDesc('created_at')->first();
            if ($latestTopicPost && (!$latestPost || $latestTopicPost->created_at > $latestPost->created_at)) {
                $latestPost = $latestTopicPost;
            }
        }

        $section->lastPost = $latestPost;

        // Now, let's handle sub-sections recursively
        foreach ($section->sections as $subsection) {
            $this->calculateSectionInfo($subsection);
            // Add the count of posts and last post of the subsection to the parent section
            $section['postsCount'] += $subsection->postsCount;
            if (!$latestPost || ($subsection->lastPost && $subsection->lastPost->created_at > $latestPost->created_at)) {
                $latestPost = $subsection->lastPost;
            }
        }

        $section->lastPost = $latestPost;
    }

}
