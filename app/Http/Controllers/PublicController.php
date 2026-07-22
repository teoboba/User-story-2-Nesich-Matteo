<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

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
        return view('article.show', compact('article'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles()->latest()->get();

        return view('article.byCategory', compact('articles', 'category'));
    }
}
