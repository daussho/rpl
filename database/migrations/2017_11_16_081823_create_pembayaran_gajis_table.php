<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_gajis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nip_bayar');
            $table->integer('bulan');
            $table->integer('total_pembayaran');
            $table->boolean('status_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_gajis');
    }
}
