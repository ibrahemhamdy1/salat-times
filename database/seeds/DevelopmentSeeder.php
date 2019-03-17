<?php

use App\User;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            'name' => 'Abdel Elrafa',
            'email' => 'pro@boca.pro',
            'password' => bcrypt('test123'),
        ];

        User::updateOrCreate(array_only($userData, 'email'), array_except($userData, 'email'));
    }
}
