<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosMVZsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos_m_v_zs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',200);
            $table->string('domicilio');
            $table->string('ciudad',60)->nullable();
            $table->string('RFC',15)->nullable();
            $table->string('telefono1',15)->nullable();
            $table->string('telefono2',15)->nullable();
            $table->string('mr')->nullable();
            $table->date('vigencia')->nullable();
            $table->boolean('preferente');
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
        Schema::dropIfExists('medicos_m_v_zs');
    }
}
