<?php

namespace App\Support;
use CoffeeCode\Optimizer\Optimizer;

class Seo{
    private $optmizer;

    public function __construct(){
        $this->optmizer = new Optimizer();
        $this->optmizer->openGraph(env('APP_NAME'),
         'pt_BR', 
         'article'
        );
    }
}

