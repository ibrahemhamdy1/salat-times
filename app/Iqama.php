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
        'from_date',
        'to_date',
        'fajr',
        'duhr',
        'asr',
        'magrib',
        'isha',
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
