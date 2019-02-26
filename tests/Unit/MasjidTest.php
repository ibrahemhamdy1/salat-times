<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\JuristicSetting;
use App\CalculationMethod;

class MasjidTest extends TestCase
{
    /** @test */
    public function create_masjid()
    {
        $user = $this->createUser();
        $masjid = $this->createMasjid($user);

        $masjid->unsetRelation('user');

        $this->assertDatabaseHas('masjids', $masjid->toArray());
    }

    /** @test */
    public function masjid_has_country()
    {
        $user = $this->createUser();
        $masjid = $this->createMasjid($user);

        $this->assertNotNull($masjid->country);
    }

    /** @test */
    public function masjid_has_calculation_method()
    {
        $calculationMethod = CalculationMethod::first();
        $user = $this->createUser();
        $masjid = $this->createMasjid($user);

        $masjid->calculationMethod()->associate($calculationMethod)->save();

        $this->assertEquals($masjid->calculationMethod()->first(), $calculationMethod);
    }

    /** @test */
    public function masjid_has_juristic_setting()
    {
        $juristicSetting = JuristicSetting::first();
        $user = $this->createUser();
        $masjid = $this->createMasjid($user);

        $masjid->juristicSetting()->associate($juristicSetting)->save();

        $this->assertEquals($masjid->juristicSetting()->first(), $juristicSetting);
    }

    /** @test */
    public function masjid_has_a_user()
    {
        $user = $this->createUser();
        $masjid = $this->createMasjid($user);

        $masjid->unsetRelation('user');

        $this->assertEquals($masjid->user()->get(), $user->get());
    }
}
