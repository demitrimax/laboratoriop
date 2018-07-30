<?php

use Illuminate\Database\Seeder;
use App\catmotivos;

class catmotivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $motivos = [
          ['motivo'=>'MOVILIZACION'],
          ['motivo'=>'1ER MUESTREO H.L.'],
          ['motivo'=>'1RA PRUEBA H.L.'],
          ['motivo'=>'BARRIDO'],
          ['motivo'=>'SANIDAD'],
          ['motivo'=>'REVALIDACION H.L.'],
          ['motivo'=>'SEGUIMIENTO EPIDEMOLOGICO'],
          ['motivo'=>'SANIDAD ANIMAL'],
        ];
        catmotivos::insert($motivos);
    }
}
