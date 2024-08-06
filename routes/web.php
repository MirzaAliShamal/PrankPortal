<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/otp', function () {
    return view('otp');
})->name('otp');

Route::get('/verify', function () {
    return view('verify');
});
