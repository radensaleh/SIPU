<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAdminUkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_admin_ukm', function (Blueprint $table) {
          $table->string('id_admin')->primary();
          $table->string('nama_admin');
          $table->string('email');
          $table->string('password');
          $table->string('id_ukm')->index();
          $table->foreign('id_ukm')->references('id_ukm')->on('tb_ukm');
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
        Schema::dropIfExists('tb_admin_ukm');
    }
}
