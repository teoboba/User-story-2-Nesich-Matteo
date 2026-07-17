<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PublicController extends Controller
{
    public function homepage()
    {
        $articles = Article::latest()->take(6)->get();

        return view('home', compact('articles'));
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);

        return view('articles.index', compact('articles'));
    }


    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function Bycategory($category)
    {


        return view('articles.Bycategory', ['articles'=> $category->articles, 'category' => $category]);
    }
}
