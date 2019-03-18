<?php

namespace App\ViewModels\Concerns;

use App\Country;

trait HasCountries
{
    /**
     * The counties.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function countries()
    {
        return Country::orderBy('name')->get();
    }
}
