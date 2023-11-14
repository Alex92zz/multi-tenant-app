<?php

namespace App\Http\Controllers;

use App\Models\Boiler;
use App\Models\Post;
use Illuminate\Http\Request;

class BoilerController extends Controller
{

    public function index()
    {
        $boilers = Boiler::all();
        return view('boilers.index', compact('boilers'));
    }

    public function show($slug)
    {
        $boiler = Boiler::where('slug', $slug)->firstOrFail();
        $boilers = Boiler::all();
        $recentPosts = Post::orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('boilers.show', compact('boiler', 'boilers', 'recentPosts'));
    }
}
