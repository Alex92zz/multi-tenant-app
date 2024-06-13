<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        return view('demo-seo.index');
    }
}
