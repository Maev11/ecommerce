<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('colonia')->nullable();
            $table->String('numeroExterior')->nullable();
            $table->String('numeroInterior')->nullable();
            $table->String('cp')->nullable();
            $table->String('calle')->nullable();
            $table->String('localidad')->nullable();
            $table->String('estado')->nullable();
            $table->String('referencias')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->cascade();
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
        Schema::dropIfExists('directions');
    }
}
