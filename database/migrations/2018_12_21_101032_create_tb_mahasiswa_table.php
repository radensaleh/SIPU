<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mahasiswa', function (Blueprint $table) {
          $table->string('nim')->primary();
          $table->string('nama_mhs');
          $table->string('id_prodi')->index();
          $table->foreign('id_prodi')->references('id_prodi')->on('tb_prodi');
          $table->string('email');
          $table->string('password');
          $table->string('alamat');
          $table->string('no_hp');
          $table->rememberToken();
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
        Schema::dropIfExists('tb_mahasiswa');
    }
}
