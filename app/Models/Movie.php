<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $table = "movies";
    protected $primaryKey = "id";
    protected $fillable = [
        "slug",
        "release_date",
        "name",
        "image",
        "description",
        "embed_link",
        "rating",
        "view_count"
    ];

    public function categoryFun(){
        return $this->belongsToMany(Category::class);
    }

}
