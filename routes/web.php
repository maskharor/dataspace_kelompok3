<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'loginProses'])
        ->name('login.proses');

    Route::get('/register', [AuthController::class, 'register'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'registerProses'])
        ->name('register.proses');
    
     Route::get('/materi', [MateriController::class, 'index'])
    ->name('materi.index');

    Route::get('/materi/{id}', [MateriController::class, 'show'])
    ->name('materi.show');


});


Route::middleware('auth')->group(function () {

    // DASHBOARD
    Route::get('users/dashboard', function () {
        return view('User.dashboard');
    });

    // LOGOUT
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

});

Route::get('/modul', function () {
    return view('Admin.Modul');
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('/pengguna', function () {
    return view('Admin.pengguna');
});

Route::get('/pengaturan', function () {
    return view('Admin.pengaturan');
});