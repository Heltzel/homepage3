<?php

use Illuminate\Support\Facades\Route;

// Route::get('/app', function () {
//     return view('app');
// });
Route::get('/', function () {
    return view('content.home');
})->name('content.home');

Route::get('/my-cv', function () {
    return view('content.cv.index');
})->name('content.cv.index');

Route::get('/about', function () {
    return view('content.about');
})->name('content.about');

Route::get('/style', function () {
    return view('content.style');
})->name('content.style');

Route::get('/contact', function () {
    return view('content.contact');
})->name('content.contact');
