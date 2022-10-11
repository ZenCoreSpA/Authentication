<?php

use Illuminate\Support\Facades\Route;
use ZenCoreSpA\Authentication\Http\Controllers\DashboardController;
use ZenCoreSpA\Authentication\Http\Controllers\LoginController;

Route::get('/auth/login', [LoginController::class, 'get'])
    ->name('auth.login');

Route::post('/auth/login', [LoginController::class, 'post'])
    ->name('auth.login');

Route::get('/auth/dashboard', DashboardController::class)
    ->name('auth.dashboard');