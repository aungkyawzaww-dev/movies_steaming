<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy("id", "desc")->withCount('movies')->paginate(10);        return view("admin.category.index",compact("categories"));
    }

    public function create()
    {
        return view("admin.category.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required"
        ]);

        $category = Category::create([
            "slug" => Str::slug($request->name),
            "name" => $request->name
        ]);

        $category->save();
        return redirect()->back()->with("success","Stored");

    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view("admin.category.edit",compact("category"));

    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->slug = Str::slug($request->name);
        $category->name = $request->name;
        $category->save();
        return redirect(route('category.index'))->with('success','Update successfully');

    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with("success","Delete successfully");
    }
}
