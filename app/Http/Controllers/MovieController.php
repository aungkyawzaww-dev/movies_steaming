<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function all(Request $request){
        
        $data = Movie::orderBy('id','desc');

        // search by titles
        if($search = $request->search){
            $data->where('name','like',"%$search%");
        }

        // search by categories 
        if($search_category = $request->category){
            $findCategory = Category::where('slug',$search_category)->first();
            if(!$findCategory){
                return redirect('/movie')->with('error','data not found');
            }
            
            $data->whereHas('categoryFun',function($query) use ($findCategory){
                $query->where('category_movie.category_id',$findCategory->id);
            });
        }

        // by rating
        if($rating = $request->rating){
            if($rating == "belowfive"){
                $data->where('rating','<',5);
            }
            if($rating == "abovefive"){
                $data->where('rating','>',5);
            }
        }


        $latest_movies = $data->paginate(12);
        return view('movie.all',compact('latest_movies'));
    }

    public function detail($slug){

        return view('movie.detail');

    }
}
