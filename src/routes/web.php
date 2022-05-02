<?php
use Illuminate\Support\Facades\Route;
use Laravia\User\App\Http\Controllers\DashboardController;
use Laravia\User\App\Http\Controllers\UserController;

$url = "/laravia";

Route::get('/home',[DashboardController::class,'home'])->name('laravia.user::dashboardHome')->middleware(['web','auth']);

Route::get($url.'/dashboard',[DashboardController::class,'index'])->name('laravia.user::dashboard')->middleware(['web','auth']);
Route::get($url.'/login',[UserController::class,'loginGet'])->name('laravia.user::login')->middleware(['web','guest']);
Route::post($url.'/login',[UserController::class,'loginPost'])->name('laravia.user::loginPost')->middleware(['web','guest']);
Route::post($url.'/logout',[UserController::class,'logoutPost'])->name('laravia.user::logout')->middleware(['web','auth']);
