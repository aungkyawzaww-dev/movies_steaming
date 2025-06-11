<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MoviesController;
use App\Http\Controllers\Admin\SerieEpisodesController;
use App\Http\Controllers\Admin\SeriesController;
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
    Route::resource("admin/movie",MoviesController::class);
    Route::resource("admin/series",SeriesController::class);
    Route::resource("admin/series-epi",SerieEpisodesController::class);
});



// movie
Route::post('store-movie',[MoviesController::class,'store']);
Route::post('update-movie/{id}',[MoviesController::class,'update']);

// serie
Route::post('store-serie',[SeriesController::class,'store']);
Route::post('update-serie/{id}',[SeriesController::class,'update']);

