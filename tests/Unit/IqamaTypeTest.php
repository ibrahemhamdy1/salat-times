<?php

namespace Tests\Unit;

use App\IqamaType;
use Tests\TestCase;

class IqamaTypeTest extends TestCase
{
    /** @test */
    public function create_iqama_type()
    {
        $iqamaType = factory(IqamaType::class)->create();

        $this->assertDatabaseHas('iqama_types', $iqamaType->toArray());
    }
}
