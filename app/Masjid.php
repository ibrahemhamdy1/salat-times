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
        'phone',
        'phone_ext',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip_code',
        'lat',
        'lng',
        'country_id',
        'hajji_date_adjustment',
        'calculation_method_id',
        'juristic_setting_id',
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
    public function iqamas()
    {
        return $this->hasMany(Iqama::class);
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
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
