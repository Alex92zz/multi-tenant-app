<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as ImageFacade;
use App\Models\Image as ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Events\PostCreated;
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
        $recentProjects = Project::latest()->take(6)->get();
        return view("localSEO.show", compact('post','recentProjects'));
    }

}
