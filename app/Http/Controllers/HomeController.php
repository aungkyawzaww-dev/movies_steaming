<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $latest_movies = Movie::orderBy("id","desc")->take(6)->get();
        $latest_series = Serie::orderBy("id","desc")->take(6)->get();
        $max_rating = Movie::where('rating','>',6)->OrderBy('rating','desc')->take(6)->get();
        return view("home",compact('latest_movies','latest_series','max_rating'));
    }
}
