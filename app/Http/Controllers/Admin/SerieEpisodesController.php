<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Serie;
use App\Models\SerieEposide;
use Illuminate\Http\Request;

class SerieEpisodesController extends Controller
{
    public function index(Request $request){
        // $serie_id = request()->serie_id;
        $serie_id = $request->serie_id;
        $serieEpisodes = Serie::where("id",$serie_id)->with('serieEpisodeFun')->first();

        $last_episode = SerieEposide::where("serie_id",$serie_id)->orderBy('id','desc')->first();

        $episode_no = 1;
        
        if($last_episode){
            $episode_no = $last_episode->eposide_no + 1;
        }

        return view("admin.serie_episodes.index",compact("serieEpisodes",'episode_no'));

    }

    public function store(Request $request){

        $serie_id = $request->serie_id;
        $episode_no = $request->episode_no;
        $direct_link = $request->direct_link;
        $api = 'https://streamhgapi.com/api/upload/url?key=28105e5eeik1ijid6j2gs&url='.$direct_link;
        $res = json_decode(file_get_contents($api)); // get file string to json with json_decode
        $filecode = $res->result->filecode; // sometime you can be error because vpn


        SerieEposide::create([
            'slug' => uniqid(),
            'serie_id' => $serie_id,
            'eposide_no' => $episode_no,
            'embed_link' => $filecode
        ]);

        return redirect()->back()->with("success",'Episode created');
    

    }
}
