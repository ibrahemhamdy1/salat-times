<?php

namespace App\ViewModels\Masjids;

use Spatie\ViewModels\ViewModel;
use Illuminate\Database\Eloquent\Collection;

class IndexViewModel extends ViewModel
{
    /**
     * The masjids.
     *
     * @var \Illuminate\Database\Eloquent\Collection
     */
    protected $masjids;

    /**
     * Setup the view model.
     *
     * @param  \Illuminate\Database\Eloquent\Collection  $masjids
     *
     * @return void
     */
    public function __construct(Collection $masjids)
    {
        $this->masjids = $masjids;
    }

    /**
     * The masjids.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function masjids()
    {
        return $this->masjids;
    }
}
