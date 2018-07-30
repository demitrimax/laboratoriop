<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(medicosmvzTableSeeder::class);
        $this->call(catserviciosTableSeeder::class);
        $this->call(usersTableSeeder::class);
        $this->call(clientesTableSeeder::class);
        $this->call(cat_especiesTableSeeder::class);
        $this->call(catmotivosTableSeeder::class);
    }
}
