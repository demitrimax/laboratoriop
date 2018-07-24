<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepomexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepomexes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idEstado');
            $table->string('estado',35);
            $table->integer('idMunicipio');
            $table->string('municipio',60);
            $table->string('ciudad',60)->nullable();
            $table->string('zona',15);
            $table->string('cp',9);
            $table->string('asentamiento',70);
            $table->string('tipo',20);
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
        Schema::dropIfExists('sepomexes');
    }
}
