<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpasien');
            $table->integer('idpaket');
            $table->string('bb');
            $table->string('tb');
            $table->string('keluhan');
            $table->string('file')->nullable();
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
        Schema::dropIfExists('detail_pasien');
    }
};
