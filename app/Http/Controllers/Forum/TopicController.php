<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Forum\Category;
use App\Models\Forum\Post;
use App\Models\Forum\Section;
use App\Models\Forum\Topic;
use App\Tools\BBCode\BBCode;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * @param Section $section
     * @return View|Factory|Application
     */
    public function create(Section $section): View|Factory|Application
    {
        return view('forum.topic.create', compact('section'));
    }

    /**
     * @param Request $request
     * @param Section $section
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse|void
     */
    public function store(Request $request, Section $section)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|min:3|max:60',
            'content' => 'required',
        ]);

        if ($request->has('create')) {
            $topic = Topic::create([
                'name' => $request['name'],
                'user_id' => $user->id,
                'section_id' => $section->id
            ]);

            Post::create([
                'content' => $request['content'],
                'user_id' => $user->id,
                'topic_id' => $topic->id
            ]);

            return redirect()->route('section.index', $section);
        } else if ($request->has('preview')) {
            return view('forum.topic.create')->with([
                'section'           => $section,
                'name'              => $request['name'],
                'content'           => $request['content'],
                'contentPreview'    => resolve(BBCode::class)->parseDefault($request['content'])
            ]);
        }
    }

    /**
     * @param Topic $topic
     * @return Application|Factory|View
     */
    public function show(Topic $topic): View|Factory|Application
    {
        $user           = Auth::user();
        $content        = session('content');
        $contentPreview = session('contentPreview');
        $categories     = Category::all();

        if (!session()->has('topic_viewed_' . $topic['id'])) {
            $topic->increment('views');

            // Mark the topic as viewed in this session
            session()->put('topic_viewed_' . $topic['id'], true);
        }

        if ($topic->posts()->count() > 0) {
            $postsAdmin = $topic->posts()->whereHas('user', function ($query) {
                $query->where('grade_id', '>=', 950);
            })->get();

            $posts = $topic->posts()->paginate(15);
            foreach ($posts as $post) {
                $post->content = resolve(BBCode::class)->parseDefault($post->content);

                if (!$post->user->trashed()) {
                    if ($post->user->signature) {
                        $post->user->signature = resolve(BBCode::class)->parseDefault($post->user->signature);
                    }

                    $post->color = match (true) {
                        $post->user->grade->id >= 950 => '#dcffd6', // Higher grade color
                        $post->user->gender == 1 => '#d6ebff',      // Male gender color
                        $post->user->gender == 2 => '#f4e6ff',      // Female gender color
                        default => '#f1f1f1',                        // Default color
                    };
                }
            }
        }

        return view('forum.topic.show', compact('topic', 'posts', 'postsAdmin', 'user', 'categories', 'content', 'contentPreview'));
    }

    /**
     * @param Topic $topic
     * @return RedirectResponse
     */
    public function destroy(Topic $topic): RedirectResponse
    {
        $topic->delete();
        return redirect()->route('section.index', $topic->section);
    }

    /**
     * @param Topic $topic
     * @return RedirectResponse
     */
    public function lock(Topic $topic): RedirectResponse
    {
        $topic['locked'] = !$topic['locked'];
        $topic->save();

        return redirect()->route('topic.show', $topic);
    }

    /**
     * @param Topic $topic
     * @return RedirectResponse
     */
    public function pin(Topic $topic): RedirectResponse
    {
        $topic['pinned'] = !$topic['pinned'];
        $topic->save();

        return redirect()->route('topic.show', $topic);
    }

    /**
     * @param Request $request
     * @param Topic $topic
     * @return RedirectResponse
     */
    public function move(Request $request, Topic $topic): RedirectResponse
    {
        $request->validate([
            'section_id' => 'required|exists:sections,id',
        ]);

        $topic->update($request->all());

        return redirect()->route('topic.show', $topic);
    }
}
