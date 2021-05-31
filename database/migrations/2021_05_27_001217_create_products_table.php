<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            $table->String('caracteristicas');
            $table->String('descripcion');
            $table->String('grantia');
            $table->Integer('cantidad');
            $table->Double('precio');
            $table->Boolean('estatus');
            
            $table->integer('categoria_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->cascade();
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
        Schema::dropIfExists('products');
    }
}
