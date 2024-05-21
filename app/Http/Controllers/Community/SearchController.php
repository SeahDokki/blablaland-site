<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request): View|Factory|Application
    {
        $users = [];
        $popularTags = Tag::withCount('users')->orderByDesc('users_count')->limit(50)->get();
        $registrants = User::all()->sortByDesc('id')->take(6);

        if ($request->search) {
            $request->validate([
                'search' => 'required|min:3|max:20'
            ]);

            if ($request->option == 'user') {
                $users = User::join('players', 'users.id', '=', 'players.user_id')
                    ->where('users.username', 'LIKE', '%'.$request->search.'%')
                    ->Orwhere('players.pseudo', 'LIKE', '%'.$request->search.'%')
                    ->get();
            }
            if ($request->option == 'tag') {
                $search = $request->search;
                $users = User::whereHas('tags', function ($query) use ($search) {
                    $query->where('name', $search);
                })->get();
            }
        }

        return view('community.search', compact('users', 'registrants', 'popularTags'));
    }
}
