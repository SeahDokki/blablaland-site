<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ArtworkController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $artworks = Artwork::paginate(30);

        return view('community.artwork.index', compact('artworks'));
    }

    /**
     * @param Artwork $artwork
     * @return Application|Factory|View
     */
    public function show(Artwork $artwork): View|Factory|Application
    {
        $artworks = Artwork::paginate(30);
        $countArtworksUser = Artwork::whereUserId($artwork->user_id)->count();

        return view('community.artwork.index', compact('artwork', 'artworks', 'countArtworksUser'));
    }
}
