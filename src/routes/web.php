<?php

use Illuminate\Support\Facades\Route;
use Laravia\User\App\Http\Controllers\DashboardController;
use Laravia\User\App\Http\Controllers\UserController;

$route = "/laravia";
$loginRoute = $route . '/login';

Route::get('/home', [DashboardController::class, 'home'])->name('laravia.user::dashboardHome')->middleware(['web', 'auth']);

Route::get($route . '/dashboard', [DashboardController::class, 'index'])->name('laravia.user::dashboard')->middleware(['web', 'auth']);
Route::get($loginRoute, [UserController::class, 'loginGet'])->name('laravia.user::login')->middleware(['web', 'guest']);
Route::post($loginRoute, [UserController::class, 'loginPost'])->name('laravia.user::loginPost')->middleware(['web', 'guest']);
Route::post($route . '/logout', [UserController::class, 'logoutPost'])->name('laravia.user::logout')->middleware(['web', 'auth']);

Route::get($route, function () use ($loginRoute) {
    return redirect($loginRoute);
});
