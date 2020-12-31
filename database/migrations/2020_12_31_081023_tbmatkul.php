<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbmatkul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //membuat table matkul
        Schema::create('tbmatkul', function (Blueprint $table)
        {
            $table->id();
            $table->string('idmatkul');
            $table->string('matkul');
            $table->string('dosen');
            $table->string('jadwal');
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
        //delete jika table matkul ada
        Schema::dropIfExists('tbmatkul');
    }
}
