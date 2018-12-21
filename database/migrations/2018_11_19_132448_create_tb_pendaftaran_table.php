<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pendaftaran', function (Blueprint $table) {
            $table->increments('id_pendaftaran');
            $table->string('id_ukm')->index();
            $table->foreign('id_ukm')->references('id_ukm')->on('tb_ukm');
            $table->string('nim')->index();
            // $table->foreign('nim')->references('nim')->on('tb_mahasiswa');
            $table->string('alasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pendaftaran');
    }
}
