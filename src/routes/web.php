<?php
use Illuminate\Support\Facades\Route;
use Laravia\User\App\Http\Controllers\DashboardController;
use Laravia\User\App\Http\Controllers\UserController;

$url = "/laravia";

Route::get($url.'/dashboard',[DashboardController::class,'index'])->name('user.dashboard')->middleware(['web','auth']);
Route::get($url.'/login',[UserController::class,'loginGet'])->name('user.login')->middleware(['web','guest']);
Route::post($url.'/login',[UserController::class,'loginPost'])->name('user.loginPost')->middleware(['web','guest']);
Route::post($url.'/logout',[UserController::class,'logoutPost'])->name('user.logout')->middleware(['web','auth']);
