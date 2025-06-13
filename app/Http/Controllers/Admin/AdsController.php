<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index()
    {
        $ads = Ads::orderBy("id", "desc")->get();
        return view("admin.ads.index",compact("ads"));
    }

    public function create()
    {
        return view("admin.ads.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "ads_type" => "required",
            "ads_script" => "required"
        ]);

        $ads = Ads::create([
            "ads_type" => $request->ads_type,
            "ads_script" => $request->ads_script,
            "on_off" => $request->on_off
        ]);

        $ads->save();
        return redirect()->back()->with("success","Stored");

    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $ads = Ads::findOrFail($id);
        return view("admin.ads.edit",compact("ads"));

    }

    public function update(Request $request, string $id)
    {
        $ads = Ads::findOrFail($id);
        $ads->ads_type = $request->ads_type;
        $ads->ads_script = $request->ads_script;
        $ads->on_off = $request->on_off;
        $ads->save();
        return redirect(route('ads.index'))->with('success','Update successfully');

    }

    public function destroy(string $id)
    {
        $ads = Ads::findOrFail($id);
        $ads->delete();
        return redirect()->back()->with("success","Delete successfully");
    }
}
