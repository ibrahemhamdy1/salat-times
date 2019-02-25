<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasjidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masjids', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name');
            $table->string('address');
            $table->string('lat');
            $table->string('lng');
            $table->tinyInteger('hajji_date_adjustment')->default(0);

            $table->integer('iqama_type')->unsigned()->nullable();
            $table->foreign('iqama_type')->references('id')->on('iqama_types');

            $table->integer('calculation_method_id')->unsigned()->nullable();
            $table->foreign('calculation_method_id')->references('id')->on('calculation_methods');

            $table->integer('juristic_setting_id')->unsigned()->nullable();
            $table->foreign('juristic_setting_id')->references('id')->on('juristic_settings');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masjids');
    }
}
