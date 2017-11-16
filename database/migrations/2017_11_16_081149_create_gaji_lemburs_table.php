<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGajiLembursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_lemburs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nip');
            $table->integer('bulan');
            $table->integer('gaji_lembur_jam');
            $table->integer('jam_lembur');
            $table->integer('gaji_lembur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaji_lemburs');
    }
}
