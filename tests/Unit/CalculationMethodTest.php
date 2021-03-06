<?php

namespace Tests\Unit;

use Tests\TestCase;

class CalculationMethodTest extends TestCase
{
    /** @test */
    public function seeding_the_database(Type $var = null)
    {
        $methods = collect([
            [
                'name' => 'Muslim World League',
                'fajr_angle' => '18',
                'isha_angle' => '17',
            ],
            [
                'name' => 'Egyptian General Authority of Survey (Default)',
                'fajr_angle' => '19.5',
                'isha_angle' => '17.5',
            ],
            [
                'name' => 'University Of Islamic Sciences, Karachi',
                'fajr_angle' => '18',
                'isha_angle' => '18',
            ],
            [
                'name' => 'Umm Al-Qura',
                'fajr_angle' => '18.5',
                'isha_angle' => '19',
            ],
            [
                'name' => 'Islamic Society of North America',
                'fajr_angle' => '15',
                'isha_angle' => '15',
            ],
            [
                'name' => 'Union des Organisations Islamiques de France',
                'fajr_angle' => '12',
                'isha_angle' => '12',
            ],
            [
                'name' => 'Majlis Ugama Islam Singapura',
                'fajr_angle' => '20',
                'isha_angle' => '18',
            ],
            [
                'name' => 'Fajr Angle and Isha time adjustment',
                'fajr_angle' => '20',
                'isha_angle' => '30',
            ],
        ]);

        $methods->each(function ($values) {
            $this->assertDatabaseHas('calculation_methods', $values);
        });
    }
}
