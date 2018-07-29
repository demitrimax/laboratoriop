<?php

use Illuminate\Database\Seeder;
use App\cat_especies;

class cat_especiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Especies = [
              ['especie'=>'Bovino', 'Activo'=>1],
              ['especie'=>'Equino', 'Activo'=>1],
              ['especie'=>'Ovino', 'Activo'=>1],
              ['especie'=>'Porcino', 'Activo'=>1],
              ['especie'=>'Canino', 'Activo'=>1],
              ['especie'=>'Felino', 'Activo'=>1],
            ]
          cat_especies::insert($Especies);
    }

}
