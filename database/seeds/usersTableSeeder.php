<?php

use Illuminate\Database\Seeder;
use App\User;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Usuarios = [
          [
            'name'=>'Moises Aguilar',
            'email'=>'armandoaguilar1@gmail.com',
            'password'=>bcrypt('moises'),
            'rol'=>'admin',
          ],
          [
            'name'=>'Elias Rodriguez',
            'email'=>'eliasrod@gmail.com',
            'password'=>bcrypt('elias'),
            'rol'=>'admin',
          ]
        ];
        User::insert($Usuarios);
    }
}
