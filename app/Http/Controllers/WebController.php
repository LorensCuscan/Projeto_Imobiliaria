<?php

namespace App\Http\Controllers;
use CoffeeCode\Optimizer\Optimizer;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Support\Seo;
class WebController extends Controller
{
    public function home()
    {
        $seo = new Seo();
        $head = $seo->render(env('APP_NAME') . ' - Projeto Lorens', 'Site imoboliaria', '/', asset('images/img_bg_1.jpg'));

        return view('front.home', [
            'head' => $head
        ]);
    }

    public function course(){
        $seo = new Seo();
        $head = $seo->render(env('APP_NAME') . ' - Sobre o Site', 'Site imoboliaria', route('course'), asset('images/img_bg_1.jpg'));

        return view('front.course', [
            'head' => $head
        ]);
        
    }

    public function blog(){
        $seo = new Seo();
        $head = $seo->render(env('APP_NAME') . ' - Projeto Lorens', 'Site imoboliaria', '/', asset('images/img_bg_1.jpg'));

        return view('front.blog', [
            'head' => $head
        ]);
       
    }

    public function article(){
        $seo = new Seo();
        $head = $seo->render(env('APP_NAME') . ' - Projeto Lorens', 'Site imoboliaria', '/', asset('images/img_bg_1.jpg'));

        return view('front.course', [
            'head' => $head
        ]);
    }
    
    public function contact(){
        $seo = new Seo();
        $head = $seo->render(env('APP_NAME') . ' - Projeto Lorens', 'Site imoboliaria', '/', asset('images/img_bg_1.jpg'));

        return view('front.contact', [
            'head' => $head
        ]);
    }
}