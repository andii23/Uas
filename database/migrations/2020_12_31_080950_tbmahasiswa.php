<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbmahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //membuat table mahasiswa
        Schema::create('tbmahasiswa', function (Blueprint $table)
        {
            $table->id();
            $table->string('nim');
            $table->string('nama');
            $table->string('alamat');
            $table->string('jeniskelamin');
            $table->string('idmatkul');
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
        //delete jika table mahasiswa ada
        Schema::dropIfExists('tbmahasiswa');
    }
}
