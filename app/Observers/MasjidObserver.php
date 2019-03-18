<?php

namespace App\Observers;

use App\Masjid;

class MasjidObserver
{
    /**
     * Handle the Dealer "deleting" event.
     *
     * @param  \App\Dealer  $dealer
     *
     * @return void
     */
    public function deleting(Masjid $masjid)
    {
        $masjid->users()->detach();
    }
}
