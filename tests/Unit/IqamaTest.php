<?php

namespace Tests\Unit;

use App\Iqama;
use App\IqamaType;
use Tests\TestCase;

class IqamaTest extends TestCase
{
    /** @test */
    public function create_new_masjid_iqama()
    {
        $user = $this->createUser();
        $masjid = $this->createMasjid($user);

        $iqama = factory(Iqama::class)->create([
            'masjid_id' => $masjid->id,
        ]);

        $this->assertDatabaseHas('iqamas', $iqama->toArray());
    }

    /** @test */
    public function iqama_has_masjid()
    {
        $user = $this->createUser();
        $masjid = $this->createMasjid($user);

        $iqama = factory(Iqama::class)->create([
            'masjid_id' => $masjid->id,
        ]);

        $this->assertEquals($iqama->masjid()->get(), $masjid->get());
    }
}
