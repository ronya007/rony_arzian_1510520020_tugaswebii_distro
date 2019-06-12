<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblNasabahkoperasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nasabahkoperasi', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nik', 10);
            $table->string('nama', 100);
            $table->string('alamat', 255);
            $table->string('pekerjaan', 100);
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
        Schema::drop('tbl_nasabahkoperasi');
    }
}
