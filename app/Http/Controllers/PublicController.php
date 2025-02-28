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
        return view('aboutMe');
    }


    public function services()
    {
        return view('services');
    }
}
