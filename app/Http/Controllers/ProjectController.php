<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $post = Project::where('slug', $slug)->firstOrFail();

        return view("projects.show", compact('post'));
    }
}
