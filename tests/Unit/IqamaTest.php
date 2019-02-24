<?php

namespace Tests\Unit;

use App\Iqama;
use Tests\TestCase;

class IqamaTest extends TestCase
{
    /** @test */
    public function create_new_masjid_iqama()
    {
        $this->createUser();

        $this->createMasjid();

        $iqama = factory(Iqama::class)->create();

        $this->assertDatabaseHas('iqamas', $iqama->toArray());
    }

    /** @test */
    public function iqama_has_masjid()
    {
        $this->createUser();

        $masjid = $this->createMasjid();

        $iqama = factory(Iqama::class)->create();

        $this->assertEquals($iqama->masjid()->get(), $masjid->get());
    }
}
