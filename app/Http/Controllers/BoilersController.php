<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoilersController extends Controller
{
    public function showGlowWorm24kw()
    {
        // Replace 'view_name' with the actual view file name
        return view('boilers.glow-worm-24kw');
    }

    public function showMainEcoCompact()
    {
        // Replace 'view_name' with the actual view file name
        return view('boilers.main-eco-compact');
    }

    public function showVokeraVibe()
    {
        // Replace 'view_name' with the actual view file name
        return view('boilers.vokera-vibe');
    }

    public function baxi600CombiBoiler24kw()
    {
        // Replace 'view_name' with the actual view file name
        return view('boilers.baxi-600-combi-boiler-24kw');
    }

    public function baxi825CombiBoiler25kw()
    {
        // Replace 'view_name' with the actual view file name
        return view('boilers.baxi-825-combi-boiler-25kw');
    }

    // Add more functions for other boiler routes as needed
}
