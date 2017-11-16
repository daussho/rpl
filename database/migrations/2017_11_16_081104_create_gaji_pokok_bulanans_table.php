<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGajiPokokBulanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_pokok_bulanans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nip');
            $table->integer('bulan');
            $table->integer('nominal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaji_pokok_bulanans');
    }
}
