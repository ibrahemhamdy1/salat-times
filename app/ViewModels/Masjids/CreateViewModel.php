<?php

namespace App\ViewModels\Masjids;

use Spatie\ViewModels\ViewModel;
use App\ViewModels\Concerns\HasCountries;
use App\ViewModels\Concerns\HasJuristicSettings;
use App\ViewModels\Concerns\HasCalculationMethods;

class CreateViewModel extends ViewModel
{
    use HasCountries, HasCalculationMethods, HasJuristicSettings;
}
