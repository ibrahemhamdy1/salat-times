<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iqama extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'fajr',
        'dhuher',
        'asr',
        'magrib',
        'isha',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'date',
        'masjid_id',
    ];


    /**
     * The user that this masjid belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function masjid()
    {
        return $this->belongsTo(Masjid::class);
    }
}
