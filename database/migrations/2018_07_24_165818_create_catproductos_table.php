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
            $table->string('nomb_corto',20)->nullable();
            $table->decimal('precio',8,2);
            $table->integer('stockMin');
            $table->integer('stock')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('linea')->nullable();
            $table->string('marca')->nullable();
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
