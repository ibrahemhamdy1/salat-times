<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class SetupDefaultIqamaTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $nowDataAndTime = Carbon::now();

        $iqamaTypes = [
            [
                'name' => 'Calculated',
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ],
            [
                'name' => 'Manual',
                'created_at' => $nowDataAndTime,
                'updated_at' => $nowDataAndTime,
            ]
        ];

        DB::transaction(function () use ($iqamaTypes) {
            DB::table('iqama_types')->insert($iqamaTypes);
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
        DB::table('iqama_types')->truncate();
        Schema::enableForeignKeyConstraints();
    }
}
