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

    public function categoryFun(){
        return $this->belongsToMany(Category::class,'category_series');
    }

    public function serieEpisodeFun(){
        return $this->hasMany(SerieEposide::class);
    }

}
