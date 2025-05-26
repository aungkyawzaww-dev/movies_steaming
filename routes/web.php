<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Auth
Route::get("admin/login",[AuthController::class,"showLogin"])->name("showlogin");
Route::post("admin/login",[AuthController::class,"login"])->name("login");
Route::get("admin/dashboard",[DashboardController::class,"index"])->name("dashboard");
