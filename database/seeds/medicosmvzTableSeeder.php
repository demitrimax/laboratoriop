<?php

use Illuminate\Database\Seeder;
use App\medicosMVZ;

class medicosmvzTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(medicosMVZ::class, 20)->create();
    }
}
