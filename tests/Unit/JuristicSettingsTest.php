<?php

namespace Tests\Unit;

use Tests\TestCase;

class JuristicSettingsTest extends TestCase
{
    /** @test */
    public function seeding_the_database(Type $var = null)
    {
        $juristicSettings = collect([
            [
                'name' => 'Standard (Hanbali, Maliki, Shafi)',
            ],
            [
                'name' => 'Hanafi',
            ]
        ]);

        $juristicSettings->each(function ($values) {
            $this->assertDatabaseHas('juristic_settings', $values);
        });
    }
}
