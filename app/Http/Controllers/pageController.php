<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function news(){
        return view('news', [
            'newses' => DB::table('news')->paginate(3),
        ]);
    }

    public function terms(){
        return view('terms');
    }
}
