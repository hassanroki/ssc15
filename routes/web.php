<?php

use App\Http\Controllers\GenderController;
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

Route::get('/', function(){
    return view('frontend.index');
});

Route::get('/home', function(){
    return view('frontend.index');
});

Route::get('/celebration', function(){
    return view('frontend.celebration');
});

Route::get('/important', function(){
    return view('frontend.important');
});

Route::get('/studentsList', function(){
    return view('frontend.studentsList');
});

Route::get('/gallery', function(){
    return view('frontend.gallery');
});

Route::get('/contact', function(){
    return view('frontend.contact');
});

Route::get('/registration', function(){
    return view('frontend.registration');
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


Route::resource('dashboard/genders', GenderController::class);

// Backend End