<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::view('/articles/create', 'articles.create')
    ->middleware('auth')
    ->name('articles.create');

Route::get('/articles/index', [PublicController::class, 'index'])->name('articles.index');

Route::get('/show/articles/{article}', [PublicController::class, 'show'])->name('articles.show');

Route::get('/category/{category}', [PublicController::class, 'byCategory'])->name('articles.byCategory');
