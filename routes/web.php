<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/announcements/create', 'announcements.create')
    ->middleware('auth')
    ->name('announcements.create');
