<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home (){
        $articles = Article::orderBy('created_at','desc')->take(3)->get();
        return view ('welcome' , compact('articles'));
    }
    public function categoryShow(Category $category){
        return view('categoryShow', compact('category'));
    }

    public function prodottiShow(Article $article){
        $articles = Article::orderBy('created_at','desc')->get();
        return view('prodottiShow', compact('articles'));
    }
    public function categoryDet(Article $article){
        return view('categoryDet' , compact('article'));
    }
}
