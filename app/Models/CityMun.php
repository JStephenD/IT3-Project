<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityMun extends Model {
    use HasFactory;

    protected $fillable = [
        'region_id',
        'type',
        'name',
        'latitude',
        'longitude'
    ];

    function region() {
        return $this->belongsTo(Region::class);
    }
}
