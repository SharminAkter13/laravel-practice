<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployerController;

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/master', function () {
    return view('master');
});


// Portal Pages
Route::get('/', function () {
    return view('portal_pages.home');
})->name('home');

Route::get('/add-resume', function () {
    return view('portal_pages.candidates.add_resume');
})->name('add-resume');

Route::get('/browse-categories', function () {
    return view('portal_pages.candidates.browse_categories');
})->name('browse-categories');

Route::get('/browse-jobs', function () {
    return view('portal_pages.candidates.browse_jobs');
})->name('browse-jobs');

Route::get('/job-alert', function () {
    return view('portal_pages.candidates.job_alert');
})->name('job-alert');

Route::get('/manage-resume', function () {
    return view('portal_pages.candidates.manage_resume');
})->name('manage-resume');

Route::get('/add-job', function () {
    return view('portal_pages.employers.add_job');
})->name('add-job');

Route::get('/browse-resume', function () {
    return view('portal_pages.employers.browse_resume');
})->name('browse-resume');

Route::get('/manage-application', function () {
    return view('portal_pages.employers.manage_application');
})->name('manage-application');

Route::get('/manage-job', function () {
    return view('portal_pages.employers.manage_job');
})->name('manage-job');

// My Account


Route::get('/my-account', function () {
    return view('auth.my_account');
})->name('my-account');

// Route::get('/my-account', [AuthController::class, 'index'])->name('my-account');

// Route::get('/my-account/login', fn() => view('auth.my_account'))->name('login.show');
// Route::get('/my-account/register', fn() => view('auth.my_account'))->name('register.show');

// Route::post('/login', [AuthController::class, 'login'])->name('login.perform');
// Route::post('/register', [AuthController::class, 'register'])->name('register.perform');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout.perform');

// Route::get('/password/reset', [AuthController::class, 'showPasswordResetForm'])->name('password.request');
// Route::post('/password/email', [AuthController::class, 'sendResetLink'])->name('password.email');


Route::get('/post-job', function () {
    return view('portal_pages.post_job');
})->name('post-job');


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/my-account', [AuthController::class, 'index'])->name('my-account');


// """"""",,,,,,""""' Categories"""""",,,,,"""""""


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// """"""",,,,,,""""' Users"""""",,,,,"""""""


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


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


// ---------------- candidates ----------------


Route::get('candidates', [CandidateController::class, 'index'])->name('candidates.index');
Route::get('candidates/create', [CandidateController::class, 'create'])->name('candidates.create');
Route::post('candidates', [CandidateController::class, 'store'])->name('candidates.store');
Route::get('candidates/{candidate}/edit', [CandidateController::class, 'edit'])->name('candidates.edit');
Route::put('candidates/{candidate}', [CandidateController::class, 'update'])->name('candidates.update');
Route::delete('candidates/{candidate}', [CandidateController::class, 'destroy'])->name('candidates.destroy');


// ---------------- Employers ----------------


Route::get('employers', [EmployerController::class, 'index'])->name('employers.index');
Route::get('employers/create', [EmployerController::class, 'create'])->name('employers.create');
Route::post('employers', [EmployerController::class, 'store'])->name('employers.store');
Route::get('employers/{employer}/edit', [EmployerController::class, 'edit'])->name('employers.edit');
Route::put('employers/{employer}', [EmployerController::class, 'update'])->name('employers.update');
Route::delete('employers/{employer}', [EmployerController::class, 'destroy'])->name('employers.destroy');
