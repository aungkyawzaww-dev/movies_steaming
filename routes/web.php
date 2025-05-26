<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::get("admin/login",[AuthController::class,"showLogin"])->name("showlogin")->middleware("RedirectIfAdminAuth");
Route::post("admin/login",[AuthController::class,"login"])->name("login");

Route::group(["middleware" => "RedirectIfNotAdminAuth"],function(){
    Route::get("admin/dashboard",[DashboardController::class,"index"])->name("dashboard");
    Route::get("logout",[AuthController::class,"logout"])->name("logout");
    Route::resource("admin/category",CategoryController::class);

});
