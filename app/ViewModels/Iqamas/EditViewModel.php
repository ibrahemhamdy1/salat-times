<?php

namespace App\ViewModels\Iqamas;

use App\Masjid;
use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class EditViewModel extends ViewModel
{
    /**
     * @param \/App/Masjid $masjid
     */
    public $masjid;

    /**
     * @param \/Illuminate\Database\Eloquent\Collection $iqamas
     */
    public $iqamas;

    /**
     * @param array $days
     */
    protected $days;

    /**
     * @param string $month
     */
    public $month;

    /**
     * @param string $previousMonth
     */
    protected $previousMonth;

    /**
     * @param string $nextMonth
     */
    protected $nextMonth;

    /**
     * @param string $year
     */
    public $year;

    /**
     * Create a new view model instance.
     *
     * @param  \App\Masjid  $masjid
     * @param  array  $days
     * @param  string  $month
     * @param mixed $iqamas
     */
    public function __construct(Masjid $masjid, $iqamas, $days)
    {
        $firstDay = new Carbon(reset($days));

        $this->masjid = $masjid;
        $this->iqamas = $iqamas;
        $this->days = collect($days);
        $this->month = $firstDay->format('F');
        $this->previousMonth = date('F', strtotime('-1 month', strtotime($this->month)));
        $this->nextMonth = $firstDay->addMonth()->format('F');
        $this->year = date('Y', strtotime(reset($days)));
    }

    /**
     * The previous month route.
     *
     * @return string
     */
    public function previousMonthRoute()
    {
        return json_encode((route('masjids.iqamas.month.edit', [$this->masjid, $this->year, $this->previousMonth])));
    }

    /**
     * The next month route.
     *
     * @return string
     */
    public function nextMonthRoute()
    {
        return json_encode((route('masjids.iqamas.month.edit', [$this->masjid, $this->year, $this->nextMonth])));
    }

    /**
     * The update month route.
     *
     * @return string
     */
    public function updateRoute()
    {
        return json_encode((route('masjids.iqamas.month.update', [$this->masjid, $this->year, $this->month])));
    }

    /**
     * Days
     *
     * @return array
     */
    public function days()
    {
        $days = [];

        $this->days->each(function ($day) use(&$days){
            if ($iqama = $this->iqamas->firstWhere('date', $day)) {
                $days[$day] = $iqama->only('fajr', 'dhuher', 'asr', 'magrib', 'isha');
            }else{
                $days[$day] = [
                    'fajr' => null,
                    'dhuher' => null,
                    'asr' => null,
                    'magrib' => null,
                    'isha' => null,
                ];
            }
        });

        return json_encode($days);
    }
}
