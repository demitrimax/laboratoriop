<?php

use Illuminate\Database\Seeder;

class catservicios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('catservicios')->insert([
           'nombre'=> 'Copro Bovinos/Equinos',
           'nomb_corto'=> 'coproBovEqno',
           'precio'=> 60,
       ]);
    }
}
