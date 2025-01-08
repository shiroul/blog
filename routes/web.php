<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    return view('blog'); 
})->name('blog');

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

Route::get('/subscribe', function () {
    return view('subscribe'); 
})->name('subscribe');

Route::get('/privacy-policy', function () {
    return view('privacy-policy'); 
})->name('privacy-policy');

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
