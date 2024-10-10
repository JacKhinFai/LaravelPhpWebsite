<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/contact', 'contact');
Route::view('/about', 'about');

//Route::get("/{slug}", [PageController::class,"welcome"])->name("page.welcome");
