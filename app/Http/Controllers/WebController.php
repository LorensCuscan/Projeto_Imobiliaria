<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class WebController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function course(){
        return view ('front.course');
    }

    public function blog(){
        return view ('front.blog');
    }

    public function article(){
        return view ('front.course');

    }public function contact(){
        return view ('front.contact');
    }
}
