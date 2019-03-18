<?php

namespace App\ViewModels\Concerns;

use App\JuristicSetting;

trait HasJuristicSettings
{
    /**
     * The juristic settings.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function juristicSettings()
    {
        return JuristicSetting::orderBy('name')->get();
    }
}
