<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');
Route::get('/post', function () {
    return view('layouts.post');
})->name('post');
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');
