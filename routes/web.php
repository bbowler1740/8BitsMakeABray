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

Route::view('/', 'welcome')->name('welcome');

Route::view('/projects', 'projects')->name('projects');

Route::view('/blog-posts', 'blog-posts')->name('blog-posts');

Route::view('/resume', 'resume')->name('resume');

Route::view('/contact', 'contact')->name('contact');
