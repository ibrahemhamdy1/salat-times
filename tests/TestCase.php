<?php

namespace Tests;

use App\User;
use App\Masjid;
use App\Country;
use App\JuristicSetting;
use App\CalculationMethod;
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
    public function createUser()
    {
        return factory(User::class)->create();
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
    public function createMasjid(User $user, array $attributes = [])
    {
        $masjid = factory(Masjid::class)->create([
            'country_id' => Country::first()->id,
            'calculation_method_id' => CalculationMethod::first()->id,
            'juristic_setting_id' => JuristicSetting::first()->id,
            'user_id' => $user->id,
        ]);

        return $masjid;
    }
}
