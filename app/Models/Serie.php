<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
        "slug",
        "name",
        "release_date",
        "image",
        "description", 
        "rating",
        "view_count",
    ];

    // ဒသမ တစ်နေရာပဲယူမယ် 
    protected $appends = ["rating_no"];
    protected function getRatingNoAttribute(){
        return number_format($this->rating,1); // ဒသမ တစ်နေရာပဲယူမယ် 
    }

    public function categoryFun(){
        return $this->belongsToMany(Category::class,'category_series');
    }

    public function serieEpisodeFun(){
        return $this->hasMany(SerieEposide::class);
    }

}
