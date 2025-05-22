<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SerieEposide extends Model
{
    protected $table = "serie_eposides";
    protected $primaryKey = "id";
    protected $fillable = [
        "slug",
        "serie_id",
        "eposide_no",
        "embed_link"
    ];

    public function serie(){
        return $this->belongsTo(Serie::class);
    }
}
