<?php

namespace Tests\Unit;

use Tests\TestCase;

class MasjidTest extends TestCase
{
    /** @test */
    public function create_masjid()
    {
        $this->createUser();
        $masjid = $this->createMasjid();

        $masjid->unsetRelation('user');

        $this->assertDatabaseHas('masjids', $masjid->toArray());
    }

    /** @test */
    public function masjid_has_a_user()
    {
        $user = $this->createUser();
        $masjid = $this->createMasjid();

        $masjid->unsetRelation('user');

        $this->assertEquals($masjid->user()->get(), $user->get());
    }
}
