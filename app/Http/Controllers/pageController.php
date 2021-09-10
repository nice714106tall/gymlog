<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function welcome(){
        return view('home');
    }

    public function news(){
        return view('news');
    }

    public function terms(){
        return view('terms');
    }
}
