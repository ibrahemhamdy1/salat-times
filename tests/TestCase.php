<?php

namespace Tests;

use App\Masjid;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    /**
     * Create new user
     *
     * @return \App\User;
     */
    public function createUser(){
        return factory('App\User')->create();
    }

    /**
     * Login new user
     *
     * @return \App\User;
     */
    public function logInUser()
    {
        $user = $this->createUser();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret'
        ]);

        return auth()->user();
    }

    /**
     * Create new masjid
     *
     * @param  \App\User  $user
     *
     * @return \App\Masjid
     */
    public function createMasjid()
    {
        $masjid = factory(Masjid::class)->create();

        return $masjid;
    }
}
