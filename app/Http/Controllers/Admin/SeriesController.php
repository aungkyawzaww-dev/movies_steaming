<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::orderBy("id","desc")->with("categoryFun")->paginate(10);
        $categories = Category::all();
        return view("admin.series.index",compact("series","categories"));
    }


    public function create()
    {
        $category = Category::all();
        return view("admin.series.create",compact("category"));
    }


    public function store(Request $request)
    {

        //validate
        $validate = Validator::make($request->all(),[
            "release_date" => "required",
            "name" => "required",
            "image_url" => "required",
            "description" => "required",
            "rating" => "required",
            "category.*" => "required"
        ]);

        if($validate->fails()){
            return response()->json($validate->errors(),422);
        }

        // movie create
        $create_serie = Serie::create([
            "slug" => Str::slug($request->name),
            "release_date" => $request->release_date,
            "name" => $request->name,
            "image" => $request->image_url,
            "description" => $request->description,
            "rating" => $request->rating,
            "view_count" => 0
        ]);

        // category sync
        $serie = Serie::find($create_serie->id);
        $serie->categoryFun()->sync($request->category);
        return "success";

    }

    public function edit(string $id)
    {
        $series = Serie::where("id",$id)->with("categoryFun")->first();
        $categories = Category::all();
        return view("admin.series.edit",compact("series","categories"));
    }

   
    public function update(Request $request, string $id)
    {

        //validate
        $validate = Validator::make($request->all(),[
            "release_date" => "required",
            "name" => "required",
            "image_url" => "required",
            "description" => "required",
            "rating" => "required",
            "category.*" => "required"
        ]);

        if($validate->fails()){
            return response()->json($validate->errors(),422);
        }

        // update serie data
        $serie = Serie::findOrFail($id);
        $serie->update([
            "release_date" => $request->release_date,
            "name" => $request->name,
            "image" => $request->image_url,
            "description" => $request->description,
            "embed_link" => $request->embed_link,
            "rating" => $request->rating,
        ]);

        // serie sync
        $serie->categoryFun()->sync($request->category);
        return "success";

    }

  
    public function destroy(string $id)
    {
        $serie = Serie::findOrFail($id);

        // delete category pitvot
        $serie->categoryFun()->sync([]);

        // delete serie
        $serie->delete();

        return redirect()->back()->with("success","deleted");

    }

    
}
