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
            $table->string('phone')->nullable();
            $table->string('phone_ext')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();

            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);

            $table->tinyInteger('hajji_date_adjustment')->default(0);

            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');

            $table->integer('calculation_method_id')->unsigned();
            $table->foreign('calculation_method_id')->references('id')->on('calculation_methods');

            $table->integer('juristic_setting_id')->unsigned();
            $table->foreign('juristic_setting_id')->references('id')->on('juristic_settings');
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
