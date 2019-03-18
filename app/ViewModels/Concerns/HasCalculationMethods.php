<?php

namespace App\ViewModels\Concerns;

use App\CalculationMethod;

trait HasCalculationMethods
{
    /**
     * The calculation methods.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function calculationMethods()
    {
        return CalculationMethod::orderBy('name')->get();
    }
}
