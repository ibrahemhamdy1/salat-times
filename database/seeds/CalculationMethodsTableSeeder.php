<?php

use Illuminate\Database\Seeder;
use App\CalculationMethod;

class CalculationMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methods = collect([
            [
                'name' => 'Muslim World League',
                'fajr_angle' => '18',
                'isha_angle' => '17',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
            ],
            [
                'name' => 'Egyptian General Authority of Survey (Default)',
                'fajr_angle' => '19.5',
                'isha_angle' => '17.5',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
            ],
            [
                'name' => 'University Of Islamic Sciences, Karachi',
                'fajr_angle' => '18',
                'isha_angle' => '18',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
            ],
            [
                'name' => 'Umm Al-Qura',
                'fajr_angle' => '18.5',
                'isha_angle' => '19',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
            ],
            [
                'name' => 'Islamic Society of North America',
                'fajr_angle' => '15',
                'isha_angle' => '15',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
            ],
            [
                'name' => 'Union des Organisations Islamiques de France',
                'fajr_angle' => '12',
                'isha_angle' => '12',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
            ],
            [
                'name' => 'Majlis Ugama Islam Singapura',
                'fajr_angle' => '20',
                'isha_angle' => '18',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
            ],
            [
                'name' => 'Fajr Angle and Isha time adjustment',
                'fajr_angle' => '20',
                'isha_angle' => '30',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
            ],
        ]);

        $methods->each(function ($values) {
            CalculationMethod::firstOrCreate($values);
        });
    }
}
