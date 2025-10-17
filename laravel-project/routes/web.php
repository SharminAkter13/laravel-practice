<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\JobController;

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


// """"""",,,,,,""""' Categories"""""",,,,,"""""""


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// """"""",,,,,,""""' Users"""""",,,,,"""""""

Route::get('/user', [UserController::class, 'index']);
Route::get('/userCreate', [UserController::class, 'create'])->name('userCreate');

Route::post('userStore', [UserController::class, 'store'])->name('userStore');
Route::get('userEdit/{user_id}', [UserController::class, 'update'])->name('userEdit');

Route::post('editStoreU', [UserController::class, 'editStoreU'])->name('editStoreU');

Route::delete('delete', [UserController::class, 'destroy'])->name('delete');


// """"""",,,,,,""""' Candidate"""""",,,,,"""""""

Route::get('/candidate', [candidateController::class, 'index']);
Route::get('/candidateCreate', [candidateController::class, 'create'])->name('candidateCreate');

Route::post('candidateStore', [CandidateController::class, 'store'])->name('candidateStore');
Route::get('candidateEdit/{candidate_id}', [candidateController::class, 'update'])->name('canEdit');

Route::post('editStoreC', [candidateController::class, 'editStoreC'])->name('editStoreC');

Route::delete('delete', [candidateController::class, 'destroy'])->name('delete');

// """""""",,,,,,,"""""""" Resume""""""",,,,,,"""""""""""""


Route::get('/resumes', [ResumeController::class, 'index'])->name('resumes.resume');
Route::get('/resumes/create', [ResumeController::class, 'create'])->name('resumes.create');
Route::post('/resumes/store', [ResumeController::class, 'store'])->name('resumes.store');
Route::get('/resumes/{id}', [ResumeController::class, 'show'])->name('resumes.show');
Route::get('/resumes/{id}/edit', [ResumeController::class, 'edit'])->name('resumes.edit');
Route::post('/resumes/{id}/update', [ResumeController::class, 'update'])->name('resumes.update');
Route::delete('/resumes/{id}', [ResumeController::class, 'destroy'])->name('resumes.destroy');



// -------------------- JOB ROUTES --------------------

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');