<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contact');
});

Route::get('/test', function () {
    return "<h2>Pizda ruliu</h2>";
});
