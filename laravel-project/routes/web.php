<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;


Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/master', function () {
    return view('master');
});



Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/', [LoginController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/create', [CategoryController::class, 'create'])->name('create');

Route::post('store', [CategoryController::class, 'store'])->name('store');

Route::get('edit/{catagory_id}', [CategoryController::class, 'update'])->name('edit');

Route::post('edit-store', [CategoryController::class, 'editStore'])->name('editStore');

Route::delete('delete', [CategoryController::class, 'destroy'])->name('delete');

