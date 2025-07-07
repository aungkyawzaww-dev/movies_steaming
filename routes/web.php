<?php

use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MoviesController;
use App\Http\Controllers\Admin\SerieEpisodesController;
use App\Http\Controllers\Admin\SeriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth => Admin
Route::get("admin/login",[AuthController::class,"showLogin"])->name("showlogin")->middleware("RedirectIfAdminAuth");
Route::post("admin/login",[AuthController::class,"login"])->name("login");

Route::group(["middleware" => "RedirectIfNotAdminAuth"],function(){
    Route::get("admin/dashboard",[DashboardController::class,"index"])->name("dashboard");
    Route::get("logout",[AuthController::class,"logout"])->name("logout");
    Route::resource("admin/category",CategoryController::class);
    Route::resource("admin/movie",MoviesController::class);
    Route::resource("admin/series",SeriesController::class);
    Route::resource("admin/series-epi",SerieEpisodesController::class);
    Route::resource("admin/ads",AdsController::class);
});



// User

Route::group([],function(){
    Route::get('/',[HomeController::class,'index'])->name("home");
    Route::get('/movie',[MovieController::class,'all']);
    Route::get('/movie/{slug}',[MovieController::class,'detail']);
    Route::get('/serie',[SerieController::class,'all']);
    Route::get('/serie/{slug}',[SerieController::class,'detail']);

    Route::group(["middleware" => "RedirectIfAuth"],function(){
        Route::get('/register',[UserAuthController::class,'showRegister']);
        Route::post('/register',[UserAuthController::class,'register']);
        Route::get('/login',[UserAuthController::class,'showLogin']);
        Route::post('/login',[UserAuthController::class,'login']);
    });

    
    Route::group(["middleware" => "RedirectIfNotAuth"],function(){
        Route::get('/logout',[UserAuthController::class,'logout'])->name('logout');
    });

});



// movie
Route::post('store-movie',[MoviesController::class,'store']);
Route::post('update-movie/{id}',[MoviesController::class,'update']);

// serie
Route::post('store-serie',[SeriesController::class,'store']);
Route::post('update-serie/{id}',[SeriesController::class,'update']);

