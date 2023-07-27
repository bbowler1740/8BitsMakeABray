<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('Home');
Route::view('/projects', 'projects')->name('Projects');
Route::view('/blog-posts', 'blog-posts')->name('Blog Posts');
Route::view('/resume', 'resume')->name('Resume');
Route::view('/contact', 'contact')->name('Contact');

