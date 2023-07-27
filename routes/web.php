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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/blog-posts', function () {
    return view('blog-posts');
})->name('blog-posts');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/contact', function () {
    return view('contact');
});
