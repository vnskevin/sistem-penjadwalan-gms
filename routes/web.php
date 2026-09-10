<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});


// LOGIN
Route::get('/login', function () {
    return view('auth.login');
})->name('login');


// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');