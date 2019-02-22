<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function create_new_user()
    {
        $user = $this->createUser();

       $this->assertDatabaseHas('users', $user->toArray());
    }
}
