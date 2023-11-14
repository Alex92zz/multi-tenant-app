<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();
        return view('blog', compact('posts'));
    }
}
