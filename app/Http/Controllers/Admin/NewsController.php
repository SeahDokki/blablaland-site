<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Nette\Utils\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $news = News::paginate(30);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'picture'       => 'required|image',
            'picture_min'   => 'required|image',
            'name'          => 'required',
            'description'   => 'required',
            'topic_id'      => 'required',
        ]);

        $path = $request->file('picture')->store('public/news');
        ImageManager::imagick()->read(Storage::path($path))->save(Storage::path($path));

        $path_bis = $request->file('picture_min')->store('public/news');
        ImageManager::imagick()->read(Storage::path($path_bis))->save(Storage::path($path_bis));

        $news                = new News;
        $news->picture       = $path;
        $news->picture_min   = $path_bis;
        $news->name          = $request->name;
        $news->description   = $request->description;
        $news->topic_id      = $request->topic_id;
        $news->save();

        return redirect()->route('dashboard.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function edit(News $news, Request $request): View|Factory|Application
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(Request $request, News $news): RedirectResponse
    {

        $request->validate([
            'picture'       => 'image',
            'picture_min'   => 'image',
            'name'          => 'required',
            'description'   => 'required',
            'topic_id'      => 'required',
        ]);

        if ($request->picture) {
            Storage::delete($news->picture);

            $path = $request->file('picture')->store('public/news');
            ImageManager::imagick()->read(Storage::path($path))->save(Storage::path($path));
            $news->picture = $path;
        }

        if ($request->picture_min) {
            Storage::delete($news->picture_min);

            $path_bis = $request->file('picture_min')->store('public/news');
            ImageManager::imagick()->read(Storage::path($path_bis))->save(Storage::path($path_bis));
            $news->picture_min   = $path_bis;
        }

        $news->name          = $request->name;
        $news->description   = $request->description;
        $news->topic_id      = $request->topic_id;
        $news->save();

        return redirect()->route('dashboard.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return RedirectResponse
     */
    public function destroy(News $news): RedirectResponse
    {
        $news->delete();
        return redirect()->route('dashboard.news.index');
    }

    /**
     * @param News $news
     * @return RedirectResponse
     */
    public function status(News $news): RedirectResponse
    {
        $news->hidden = !$news->hidden;
        $news->save();

        return redirect()->route('dashboard.news.index');
    }

    /**
     * @param News $news
     * @return RedirectResponse
     */
    public function published(News $news): RedirectResponse
    {
        $news->published = !$news->published;
        $news->save();

        return redirect()->route('dashboard.news.index');
    }
}
