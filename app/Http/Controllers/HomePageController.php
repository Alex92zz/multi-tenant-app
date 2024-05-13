<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        $recentPosts = Post::latest()
            ->take(3)
            ->get();

        return view('index', compact('recentPosts', 'recentProjects'));
    }
}
