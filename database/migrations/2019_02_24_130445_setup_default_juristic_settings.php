<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class SetupDefaultJuristicSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $nowDataAndTime = Carbon::now();

        $juristicSettings = [
            [
                'name' => 'Standard (Hanbali, Maliki, Shafi)',
                "created_at" => $nowDataAndTime,
                "updated_at" => $nowDataAndTime,
            ],
            [
                'name' => 'Hanafi',
                "created_at" => $nowDataAndTime,
                "updated_at" => $nowDataAndTime,
            ]
        ];

        DB::transaction(function () use ($juristicSettings){
            DB::table('juristic_settings')->insert($juristicSettings);
        }, 5);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('juristic_settings')->truncate();
        Schema::enableForeignKeyConstraints();
    }
}
