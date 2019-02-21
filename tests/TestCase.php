<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

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

        return $user;
    }
}
