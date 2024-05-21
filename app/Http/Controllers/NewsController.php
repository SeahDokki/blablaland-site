<?php

namespace App\Http\Controllers;

use App\Models\Admin\News;
use App\Tools\BBCode\BBCode;

/**
 * Class GameController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{

    public function index()
    {

    }

    public function show(News $news)
    {
        if (!$news->published) {
            abort(404);
        }
        $news->content = resolve(BBCode::class)->parseDefault($news->topic->posts[0]->content);

        return view('news.show', compact('news'));
    }
}
