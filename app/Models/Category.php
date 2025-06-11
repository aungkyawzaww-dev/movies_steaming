<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = [
        "slug",
        "name"
    ];

    public function movies() {
        return $this->belongsToMany(Movie::class);
    }

    public function seriesFun() {
        return $this->belongsToMany(Serie::class,'category_series');
    }
}
