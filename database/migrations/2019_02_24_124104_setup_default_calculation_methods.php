<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class SetupDefaultCalculationMethods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $nowDataAndTime = Carbon::now();

        $methods = [
            [
                'name' => 'Muslim World League',
                'fajr_angle' => '18',
                'isha_angle' => '17',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
            [
                'name' => 'Egyptian General Authority of Survey (Default)',
                'fajr_angle' => '19.5',
                'isha_angle' => '17.5',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
            [
                'name' => 'University Of Islamic Sciences, Karachi',
                'fajr_angle' => '18',
                'isha_angle' => '18',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
            [
                'name' => 'Umm Al-Qura',
                'fajr_angle' => '18.5',
                'isha_angle' => '19',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
            [
                'name' => 'Islamic Society of North America',
                'fajr_angle' => '15',
                'isha_angle' => '15',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
            [
                'name' => 'Union des Organisations Islamiques de France',
                'fajr_angle' => '12',
                'isha_angle' => '12',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
            [
                'name' => 'Majlis Ugama Islam Singapura',
                'fajr_angle' => '20',
                'isha_angle' => '18',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
            [
                'name' => 'Fajr Angle and Isha time adjustment',
                'fajr_angle' => '20',
                'isha_angle' => '30',
                'dhuhr_time_after_zawal' => 1,
                'maghrib_time_after_sunset' => 1,
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
        ];

        DB::transaction(function () use ($methods) {
            DB::table('calculation_methods')->insert($methods);
        }, 5);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('calculation_methods')->truncate();
        Schema::enableForeignKeyConstraints();
    }
}
