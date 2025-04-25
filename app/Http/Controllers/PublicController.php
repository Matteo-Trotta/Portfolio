<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }


    public function aboutMe()
    {
        return view('aboutme');
    }


    public function services()
    {
        return view('services');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    // public function fotografia()
    // {
    //     return view('fotografia');
    // }
}
