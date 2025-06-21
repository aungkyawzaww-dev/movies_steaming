<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function all(Request $request){
        $serieData = Serie::orderBy('id','desc');

        // search title
        if($searchData = $request->search){
            $serieData->where('name','like',"%$searchData%");
        }

        // search by categories
        if($search_category = $request->category){
            $findCategory = Category::where('slug',$search_category)->first();
            if(!$findCategory){
                return redirect('/serie')->with("error","Data Not Found!");
            }

            $serieData->whereHas('categoryFun',function($query) use ($findCategory){
                $query->where('category_series.category_id',$findCategory->id);
            });
        }

        //search by rating
        if($searchRating = $request->rating){

            if($searchRating == "belowfive"){
                $serieData->where('rating','<',5);  
            }

            if($searchRating == "abovefive"){
                $serieData->where('rating','>',5);
            } 
        }

        $latest_series = $serieData->paginate(12);
        return view('serie.all',compact('latest_series'));
    }

    public function detail(){
        
    }
}
