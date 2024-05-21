<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CommunityController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('community.index');
    }
}
