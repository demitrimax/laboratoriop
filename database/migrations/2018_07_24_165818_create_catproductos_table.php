<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catproductos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nomb_corto',20);
            $table->decimal('precio',8,2);
            $table->integer('stockMin');
            $table->integer('stock');
            $table->string('presentacion');
            $table->string('linea');
            $table->string('marca');
            $table->softDeletes();
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
        Schema::dropIfExists('catproductos');
    }
}
