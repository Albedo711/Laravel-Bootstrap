<?php

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

Route::get('/home', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/register', function () {
    return view('register');
});