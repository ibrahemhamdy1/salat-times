<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalculationMethod extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'fajr_angle',
        'dhuhr_time_after_zawal',
        'maghrib_time_after_sunset',
    ];
}
