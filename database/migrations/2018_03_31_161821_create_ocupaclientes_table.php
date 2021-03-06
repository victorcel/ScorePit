<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcupaclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocupaclientes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mesa_id');
            $table->foreign('mesa_id')->references('id')->on('mesas');
            $table->unsignedInteger('casino_id');
            $table->foreign('casino_id')->references('id')->on('casinos');
            $table->integer('clientes');
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
        Schema::dropIfExists('ocupaclientes');
    }
}
