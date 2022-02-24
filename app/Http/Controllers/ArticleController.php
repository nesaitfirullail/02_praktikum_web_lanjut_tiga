<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article1(){
        return redirect('https://www.educastudio.com/news');
    }

    public function article2($news){
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    }
}
