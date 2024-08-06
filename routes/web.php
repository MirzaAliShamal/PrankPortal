<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/otp', function () {
    return view('otp');
});

Route::get('/verify', function () {
    return view('verify');
});
