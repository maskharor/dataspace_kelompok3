<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'loginProses'])
        ->name('login.proses');

    Route::get('/register', [AuthController::class, 'register'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'registerProses'])
        ->name('register.proses');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {

        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        if ($user->role === 'mahasiswa') {
            return redirect()->route('materi.index');
        }

        if ($user->role === 'dosen') {
            return redirect()->route('materi.index');
        }

        return redirect()->route('home');
    })->name('dashboard');

    Route::get('/materi', function () {
        return view('materi.index');
    })->name('materi.index');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get(
            '/dashboard',
            [AdminDashboardController::class, 'index']
        )->name('dashboard');

        Route::get('/modul', function () {
            return view('Admin.modul');
        })->name('modul');

        Route::get('/pengguna', function () {
            return view('Admin.pengguna');
        })->name('pengguna');

        Route::get('/pengaturan', function () {
            return view('Admin.pengaturan');
        })->name('pengaturan');
    });
