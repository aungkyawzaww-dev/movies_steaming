<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        "slug",
        "name",
        "image",
        "description",
        "embed_link",
        "rating",
        "view_count"
    ];
}
