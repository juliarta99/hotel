<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
     
    }

    public function create()
    {
        return view('register');
    }

    public function store()
    {
        
    }
}
