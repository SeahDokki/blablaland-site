<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Forum\Post;
use App\Models\Forum\Topic;
use App\Tools\BBCode\BBCode;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    /**
     * @param Request $request
     * @param Topic $topic
     * @return RedirectResponse|void
     */
    public function create(Request $request, Topic $topic)
    {
        $user = Auth::user();

        if ($topic['locked'] && $user['grade_id'] < 90) {
            return redirect()->back();
        }

        $request->validate([
            'content' => 'required'
        ]);

        if ($request->has('response')) {
            $topic->posts()->create([
                'content'   => $request['content'],
                'user_id'   => $user['id'],
                'topic_id'  => $topic['id'],
            ]);

            $topic->update(['updated_at' => now()]);

            return redirect()->back();
        } else if ($request->has('preview')) {
            return redirect()->back()->with([
                'content'           => $request['content'],
                'contentPreview'    => resolve(BBCode::class)->parseDefault($request['content'])
            ]);
        }
    }

    /**
     * @param Post $post
     * @return Application|Factory|View
     */
    function edit(Post $post): View|Factory|Application
    {
        $user           = Auth::user();
        $isFirst        = $this->isFirstPost($post);
        $name           = session('name');
        $content        = session('content');
        $contentPreview = session('contentPreview');

        if ($user['id'] !== $post['user_id'] && $user['grade_id'] < 90) {
            abort(404);
        }
        return view('forum.topic.edit', compact('post', 'isFirst', 'name', 'content', 'contentPreview'));
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse|void
     */
    function update(Request $request, Post $post)
    {
        $user = Auth::user();
        $request->validate([
            'content' => 'required'
        ]);

        if ($request->has('update')) {
            if ($request['name'] && $this->isFirstPost($post)) {
                if ($user['id'] == $post['user_id'] || $user['grade_id'] >= 90) {
                    $post->topic->name = $request['name'];
                    $post->topic->save();
                }
            }

            if ($post['content'] !== $request['content']) {
                $post['content'] = $request['content'];
                $post->update();
            }

            return redirect()->route('topic.show', $post->topic);
        } else if ($request->has('preview')) {
            return redirect()->route('post.edit', $post)->with([
                'name'              => $request['name'],
                'content'           => $request['content'],
                'contentPreview'    => resolve(BBCode::class)->parseDefault($request['content'])
            ]);
        }
    }

    /**
     * @param Post $post
     * @return RedirectResponse
     */
    function destroy(Post $post): RedirectResponse
    {
        $user = Auth::user();
        if ($user['id'] !== $post['user_id'] && $user['grade_id'] < 90) {
            abort(404);
        }

        $post->delete();

        if ($post->topic->posts->count() === 0) {
            $post->topic->delete();
            return redirect()->route('section.index', $post->topic->section);
        }

        return redirect()->route('topic.show', $post->topic);
    }

    /**
     * @param Post $post
     * @return JsonResponse
     */
    function api(Post $post): JsonResponse
    {
        return response()->json([
            'username'  => $post->user->username,
            'content'   => $post->content,
        ]);
    }

    /**
     * @param Post $post
     * @return bool
     */
    private function isFirstPost(Post $post): bool
    {
        return Topic::whereId($post->topic_id)->first()->posts()->first()->id === $post->id;
    }
}
