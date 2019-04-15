<?php

namespace App\ViewModels\Masjids;

use App\Masjid;
use Spatie\ViewModels\ViewModel;
use App\ViewModels\Concerns\HasCountries;
use App\ViewModels\Concerns\HasJuristicSettings;
use App\ViewModels\Concerns\HasCalculationMethods;

class EditViewModel extends ViewModel
{
    use HasCountries, HasCalculationMethods, HasJuristicSettings;

    /**
     * @var \App\Masjid
     */
    public $masjid;

    public function __construct(Masjid $masjid)
    {
        $this->masjid = $masjid;
    }
}
