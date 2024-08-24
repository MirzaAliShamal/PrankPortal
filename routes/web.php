<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Models\User;

Route::get("messages",function(){
    $users = User::all();
    return view("messages",compact('users'));
});

Route::middleware('guest')->group(function() {
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'loginForm')->name('login');
    Route::post('/', 'login')->name('login');
});
});

Route::middleware('auth')->group(function() {
    Route::controller(UserController::class)->group(function() {
        Route::get('/home', 'index')->name('home');
        Route::post('/otp-save', 'otpStore')->name('otp.store');
        Route::post('/two-fa', 'twofaStore')->name('twoFa.store');
    });
});

Route::controller(LoginController::class)->name('admin.')->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
});

Route::middleware('admin')->group(function () {
    Route::controller(AdminController::class)->name('admin.')->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('get-detail', 'getUserDetails')->name('getUserDetails');
        Route::post('status-update', 'userStatusUpdate')->name('userStatusUpdate');
        Route::delete('user-delete/{id}', 'destroy')->name('user.delete');
    });

    Route::controller(GeneralSettingController::class)->name('setting.')->group(function () {
        Route::get('general-setting', 'index')->name('index');
        Route::post('general-setting', 'update')->name('update');
    });
});