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
     * The country that this masjid belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * The calculation method that this belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function calculationMethod()
    {
        return $this->belongsTo(CalculationMethod::class);
    }

    /**
     * The user that this masjid belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function iqama()
    {
        return $this->hasOne(Iqama::class);
    }

    /**
     * The juristic setting that this belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function juristicSetting()
    {
        return $this->belongsTo(JuristicSetting::class);
    }

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
