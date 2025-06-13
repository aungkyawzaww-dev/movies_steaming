<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table = "ads";
    protected $primaryKey = "id";
    protected $fillable = [
        'ads_type',
        'ads_script',
        'on_off'
    ];
}
