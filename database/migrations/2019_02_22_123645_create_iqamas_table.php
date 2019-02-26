<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIqamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iqamas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->date('from_date');
            $table->date('to_date');
            $table->string('fajr');
            $table->string('duhr');
            $table->string('asr');
            $table->string('magrib');
            $table->string('isha');

            $table->integer('masjid_id')->unsigned();
            $table->foreign('masjid_id')->references('id')->on('masjids');

            $table->integer('iqama_type_id')->unsigned();
            $table->foreign('iqama_type_id')->references('id')->on('iqama_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iqamas');
    }
}
