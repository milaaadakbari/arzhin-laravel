<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/articles', [ArticleController::class,'articles'])->name('front.articles');
Route::get('/article/{id}', [ArticleController::class,'article'])->name('front.article');
Route::fallback(function (){
    return view('frontend.404');
});






