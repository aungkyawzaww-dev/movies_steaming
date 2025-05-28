<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $table = "movies";
    protected $primaryKey = "id";
    protected $fillable = [
        "slug",
        "name",
        "image",
        "description",
        "embed_link",
        "rating",
        "view_count",
        "category_id",
    ];

    public function category(){
        return $this->belongsToMany(Category::class);
    }

}
