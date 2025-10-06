<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/master', function () {
    return view('master');
});
