<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class ArtworkController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $artworks = Artwork::paginate(30);

        return view('admin.artwork.index', compact('artworks'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.artwork.create');
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
            'picture' => 'required|image',
            'picture_min' => 'required|image',
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required',
        ]);

        $path = $request->file('picture')->store('public/artclub');
        ImageManager::imagick()->read(Storage::path($path))->save(Storage::path($path));

        $path_bis = $request->file('picture_min')->store('public/artclub');
        ImageManager::imagick()->read(Storage::path($path_bis))->save(Storage::path($path_bis));

        $artwork                = new Artwork;
        $artwork->picture       = $path;
        $artwork->picture_min   = $path_bis;
        $artwork->name          = $request->name;
        $artwork->description   = $request->description;
        $artwork->topic_id      = $request->topic_id  ?? null;
        $artwork->user_id       = $request->user_id;
        $artwork->save();

        return redirect()->route('dashboard.artwork.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
