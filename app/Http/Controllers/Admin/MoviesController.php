<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MoviesController extends Controller
{
    
    public function index()
    {
        $movies = Movie::orderBy("id","desc")->with("categoryFun")->paginate(10);
        $categories = Category::all();
        return view("admin.movies.index",compact("movies","categories"));
    }


    public function create()
    {
        $category = Category::all();
        return view("admin.movies.create",compact("category"));
    }


    public function store(Request $request)
    {

        //validate
        $validate = Validator::make($request->all(),[
            "release_date" => "required",
            "name" => "required",
            "image_url" => "required",
            "description" => "required",
            "embed_link" => "required",
            "rating" => "required",
            "category.*" => "required"
        ]);

        if($validate->fails()){
            return response()->json($validate->errors(),422);
        }

        // movie create
        $create_movie = Movie::create([
            "slug" => Str::slug($request->name),
            "release_date" => $request->release_date,
            "name" => $request->name,
            "image" => $request->image_url,
            "description" => $request->description,
            "embed_link" => $request->embed_link,
            "rating" => $request->rating,
            "view_count" => 0
        ]);

        // category sync
        $movie = Movie::find($create_movie->id);
        $movie->categoryFun()->sync($request->category);
        return "success";

    }

    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        $movies = Movie::where("id",$id)->with("categoryFun")->first();
        $categories = Category::all();
        return view("admin.movies.edit",compact("movies","categories"));
    }

   
    public function update(Request $request, string $id)
    {

        //validate
        $validate = Validator::make($request->all(),[
            "release_date" => "required",
            "name" => "required",
            "image_url" => "required",
            "description" => "required",
            "embed_link" => "required",
            "rating" => "required",
            "category.*" => "required"
        ]);

        if($validate->fails()){
            return response()->json($validate->errors(),422);
        }

        // update movie data
        $movie = Movie::findOrFail($id);
        $movie->update([
            "release_date" => $request->release_date,
            "name" => $request->name,
            "image" => $request->image_url,
            "description" => $request->description,
            "embed_link" => $request->embed_link,
            "rating" => $request->rating,
        ]);

        // movie sync
        $movie->categoryFun()->sync($request->category);
        return "success";

    }

  
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);

        // delete category pitvot
        $movie->categoryFun()->sync([]);

        // delete movie
        $movie->delete();

        return redirect()->back()->with("success","deleted");

    }
}
