<?php

namespace App\Http\Controllers\Iqamas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Iqamas\Update;
use App\ViewModels\Iqamas\EditViewModel;
use Illuminate\Contracts\Auth\Authenticatable as LoggedInUser;

class IqamasController extends Controller
{
    /**
     * Get the masjid iqamas.
     *
     * @param  int  $masjid
     * @param  string  $year
     * @param  string  $month
     * @param LoggedInUser $authUser
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(LoggedInUser $authUser, $masjid, $year, $month)
    {
        $month = date('m', strtotime($month));
        $masjid = $authUser->masjids()->findOrFail($masjid);
        $iqamas = $masjid->iqamas()->whereYear('date', '=', $year)->whereMonth('date', '=', $month)->get();

        $daysInMonth = date('t', strtotime("{$year}-{$month}-01"));

        foreach (range(1, $daysInMonth) as $day) {
            $days[] = date('Y-m-d', strtotime("{$year}-{$month}-{$day}"));
        }

        return view('iqamas.edit', new EditViewModel($masjid, $iqamas, $days));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Iqamas\Update  $request
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $authUser
     * @param  int  $masjid
     * @param  string  $year
     * @param  string  $month
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, LoggedInUser $authUser, $masjid, $year, $month)
    {
        $month = date('m', strtotime($month));
        $masjid = $authUser->masjids()->findOrFail($masjid);

        $daysIqama = collect(($request->validatedValue('iqamas')))->filter(function ($value) {
            return $value['fajr'] || $value['dhuher'] || $value['asr'] || $value['maghirb'] || $value['isha'];
        });

        $daysIqama->each(function ($dayIqamas, $dayDate) use ($masjid) {
            $masjid->iqamas()->updateOrCreate(['date' => $dayDate], $dayIqamas);
        });

        flash('Month updated successfully')->success();

        return redirect()->back();
    }
}
