<?php

use Illuminate\Support\Facades\Route;
use ZenCoreSpA\Authentication\Http\Controllers\DashboardController;
use ZenCoreSpA\Authentication\Http\Controllers\LoginController;
use ZenCoreSpA\Authentication\Http\Controllers\LogoutController;

Route::get('/auth/login', [LoginController::class, 'get'])
    ->name('auth.login');

Route::post('/auth/login', [LoginController::class, 'post'])
    ->name('auth.login');

Route::post('/auth/logout', LogoutController::class)
    ->name('auth.logout');

Route::get('/auth/dashboard', DashboardController::class)
    ->name('auth.dashboard');