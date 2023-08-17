<?php

use Illuminate\Support\Facades\Route;
use App\Mail\InquirySent;

Route::view('/', 'welcome')->name('Home');
Route::view('/projects', 'projects')->name('Projects');
Route::view('/blog-posts', 'blog-posts')->name('Blog Posts');
Route::view('/resume', 'resume')->name('Resume');
Route::view('/contact', 'contact')->name('Contact');

Route::get('/mailable', function() {
    return (new InquirySent('Brayden Bowler', 'braybowler1995@gmail.com', 'Test message.'))->render();
});
