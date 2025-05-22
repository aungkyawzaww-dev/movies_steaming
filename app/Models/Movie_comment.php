<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie_comment extends Model
{
    protected $table = "movie_comments";
    protected $primaryKey = "id";
    protected $fillable = [
        "movie_id",
        "user_id",
        "comment"
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
