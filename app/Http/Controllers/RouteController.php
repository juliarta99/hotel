<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('welcome',
        [
            'title' => "Argent's Hotel"
        ]);
    }

    public function destination()
    {
        return view('destination',
        [
            'title' => "Destination Argent's Hotel"
        ]);
    }

    public function gallery()
    {
        return view('gallery',
        [
            'title' => "Gallery Urgent Hotel"
        ]);
    }

    public function spa()
    {
        return view('spa_servis',
        [
            'title' => "Spa Argent's Hotel"
        ]);
    }
}
