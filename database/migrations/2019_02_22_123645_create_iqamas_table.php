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

            $table->date('date');
            $table->string('fajr');
            $table->string('duhr');
            $table->string('asr');
            $table->string('magrib');
            $table->string('isha');

            $table->integer('masjid_id')->unsigned();
            $table->foreign('masjid_id')->references('id')->on('masjids');
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
