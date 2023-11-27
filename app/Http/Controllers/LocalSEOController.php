<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as ImageFacade;
use App\Models\Image as ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Events\PostCreated;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\LocalSEO;
use App\Models\Post;
use App\Models\Project;

class LocalSEOController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = LocalSEO::where('slug', $slug)->firstOrFail();

        // Get the latest 6 projects from the same category
        $recentProjects = Project::where('category_id', $post->category_id)
            ->latest()
            ->take(6)
            ->get();

        switch ($post->category_slug)
            {
                case 'block-paving':
                    return view('localSEO.block-paving.show', compact('recentProjects', 'post'));
                case 'turfing':
                    return view('localSEO.turfing.show', compact('recentProjects', 'post'));
                case 'fencing':
                    return view('localSEO.fencing.show', compact('recentProjects', 'post'));
                case 'tarmac-surfacing':
                    return view('localSEO.tarmac-surfacing.show', compact('recentProjects', 'post'));
            }
        }
    }