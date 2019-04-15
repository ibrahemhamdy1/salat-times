<?php

use App\User;
use Illuminate\Database\Seeder;
use App\Masjid;
use App\Iqama;

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

        $user = User::updateOrCreate(array_only($userData, 'email'), array_except($userData, 'email'));

        $masjidData = [
            'name' => 'denton mosque',
            'address_1' => '1105 Greenlee St, Denton, TX 76201',
            'phone' => '940-484-1871',
            'lat' => '33.201370',
            'lng' => '-97.144830',
            'country_id' => 1,
            'calculation_method_id' => 1,
            'juristic_setting_id' => 1,
        ];

        $masjid = Masjid::updateOrCreate(array_only($masjidData, 'name'), array_except($masjidData, 'name'))->users()->attach($user);

        factory(Iqama::class, 5)->create([
            'masjid_id' => Masjid::first()->id
        ]);
    }
}
