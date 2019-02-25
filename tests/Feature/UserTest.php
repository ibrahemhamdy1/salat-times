<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function new_user_can_login()
    {
        $user = $this->createUser();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret',
        ]);

        $response->assertStatus(302);

        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function invalid_user_can_not_login()
    {
        $response = $this->post('/login', [
            'email' => $this->createUser()->email,
            'password' => 'invalid'
        ]);

        $response->assertSessionHasErrors();

        $this->assertGuest();
    }

    /** @test */
    public function auth_user_can_logout()
    {
        $user = $this->logInUser();

        $this->assertAuthenticatedAs($user);

        $response = $this->actingAs($user)->post('/logout');

        $response->assertStatus(302);

        $this->assertGuest();
    }
}
