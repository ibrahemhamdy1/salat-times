<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculationMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculation_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name');

            $table->string('fajr_angle');
            $table->string('isha_angle');
            $table->tinyInteger('dhuhr_time_after_zawal')->default(1);
            $table->tinyInteger('maghrib_time_after_sunset')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calculation_methods');
    }
}
