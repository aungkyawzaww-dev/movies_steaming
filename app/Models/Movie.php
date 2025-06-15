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

    // ဒသမ တစ်နေရာပဲယူမယ် 
    protected $appends = ["rating_no"];
    protected function getRatingNoAttribute(){
        return number_format($this->rating,1); // ဒသမ တစ်နေရာပဲယူမယ် 
    }

    public function categoryFun(){
        return $this->belongsToMany(Category::class);
    }

}
