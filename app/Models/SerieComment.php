<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SerieComment extends Model
{
    protected $table = "serie_comments";
    protected $primaryKey = "id";
    protected $fillable = [
        "serie_id",
        "user_id",
        "comment"
    ];

    public function serie(){
        return $this->belongsTo(Serie::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
