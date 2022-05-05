<?php

use Illuminate\Support\Facades\Route;
use Laravia\User\App\Http\Controllers\DashboardController;
use Laravia\User\App\Http\Controllers\UserController;

Route::get('/home', [DashboardController::class, 'home'])->name('laravia.user::dashboardHome')->middleware(['web', 'auth']);

Route::get('/laravia/dashboard', [DashboardController::class, 'index'])->name('laravia.user::dashboard')->middleware(['web', 'auth']);
Route::get('/laravia/login', [UserController::class, 'loginGet'])->name('laravia.user::login')->middleware(['web', 'guest']);
Route::post('/laravia/login', [UserController::class, 'loginPost'])->name('laravia.user::loginPost')->middleware(['web', 'guest']);
Route::post('/laravia/logout', [UserController::class, 'logoutPost'])->name('laravia.user::logoutPost')->middleware(['web', 'auth']);

Route::get('/laravia', function () {
    return redirect('/laravia/login');
});
