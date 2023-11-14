<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\LocalSEO;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $blogPosts = Post::latest()
            ->get();

        $localSeoPostsByCategory = LocalSEO::latest()
            ->get()
            ->groupBy('category');

        return view('footer-pages.sitemap', compact('blogPosts', 'localSeoPostsByCategory'));
    }
}
