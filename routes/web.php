<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Laman Awal
Route::get('/', function () {
    return view('landing');
});

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});