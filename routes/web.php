<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('Home');
Route::view('/projects', 'projects')->name('Projects');
Route::view('/blog-posts', 'blog-posts')->name('Blog Posts');
Route::view('/resume', 'resume')->name('Resume');
Route::view('/contact', 'contact')->name('Contact');

Route::get('/mailable', function() {
    return new App\Mail\InquirySent('Brayden Bowler', 'braybowler1995@gmail.com', 'Come work for us!');
});
