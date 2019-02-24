<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'lat',
        'lng',
    ];

    /**
     * The user that this masjid belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
