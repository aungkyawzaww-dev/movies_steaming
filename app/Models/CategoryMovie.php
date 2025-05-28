<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMovie extends Model
{
    protected $table = "category_movie";
    protected $fillable = [
        "movie_id",
        "category_id",
        "view_count"
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
