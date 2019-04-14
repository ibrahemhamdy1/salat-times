<?php

namespace App\ViewModels\Iqamas;

use App\Masjid;
use Spatie\ViewModels\ViewModel;

class IndexViewModel extends ViewModel
{
    /**
     * The masjid.
     *
     * @var \Illuminate\Database\Eloquent\Collection
     */
    protected $masjid;

    /**
     * Create a new view model instance.
     *
     * @param  \App\Masjid  $masjid
     *
     * @return void
     */
    public function __construct(Masjid $masjid)
    {
        $this->masjid = $masjid;

    }

    /**
     * The masjid
     *
     * @return \App\Masjid
     */
    public function masjid()
    {
        return $this->masjid;
    }
}
