<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MrouteController extends Controller
{
    public function homepage()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function getstart()
    {
        return view('getstart');
    }
}
