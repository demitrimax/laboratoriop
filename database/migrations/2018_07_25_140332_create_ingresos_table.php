<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('idmvz')->unsigned();
                //foreing
                $table->foreign('idmvz')->references('id')->on('medicos_m_v_zs');
            $table->integer('cliente')->unsigned();
            //foreing
                $table->foreign('cliente')->references('id')->on('clientes');
            $table->integer('especie')->unsigned();
            //foreint
                $table->foreign('especie')->references('id')->on('cat_especies');
            $table->string('raza')->nullable();
            $table->string('sexo',100)->nullable();
            $table->integer('num_muestras')->nullable();
            $table->integer('mot_prueba')->unsigned();
            //foreing
                $table->foreign('mot_prueba')->references('id')->on('catmotivos');
            $table->integer('analisis')->unsigned();
            //foreing
              $table->foreign('analisis')->references('id')->on('catservicios');
            $table->string('tratamiento');
            $table->string('observaciones');
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
        Schema::dropIfExists('ingresos');
    }
}
