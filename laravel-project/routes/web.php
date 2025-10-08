<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

