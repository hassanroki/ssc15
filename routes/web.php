<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentInfoController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Start

Route::get('/welcome', function () {
    return view('welcome');
});

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Students List
Route::get('/studentList', [HomeController::class, 'studentsList'])->name('studentList');

Route::get('/celebration', function(){
    return view('frontend.celebration');
});

Route::get('/important', function(){
    return view('frontend.important');
});



Route::get('/gallery', function(){
    return view('frontend.gallery');
});

Route::get('/contact', function(){
    return view('frontend.contact');
});

Route::get('/login', function(){
    return view('frontend.login');
});

Route::get('/profile', function(){
    return view('frontend.profile');
});

Route::get('/profileStatus', function(){
    return view('frontend.profileStatus');
});

// Frontend End


// Backend Start

Route::get('/dashboard', function(){
    return view('backend.dashboard.index');
});

Route::get('/dashboard/users', function(){
    return view('backend.users.users');
});

Route::get('/dashboard/merit', function(){
    return view('backend.merit.merit');
});

// Gender Table
Route::resource('dashboard/genders', GenderController::class);

// Semester Table
Route::resource('dashboard/semesters', SemesterController::class);

// Institute Table
Route::resource('dashboard/institute', InstituteController::class);

// Department
Route::resource('/dashboard/departments', DepartmentController::class);

// Batch 15 Student Info
Route::resource('/dashboard/studentInfo', StudentInfoController::class);

// Student
Route::resource('/dashboard/students', StudentController::class);

// Backend End

