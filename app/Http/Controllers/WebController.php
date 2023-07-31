<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class WebController extends Controller
{
    public function home()
    {
        echo "Home";
    }
}
