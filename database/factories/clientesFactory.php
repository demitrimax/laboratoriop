<?php

use Faker\Generator as Faker;
use App\Clientes;

$factory->define(Clientes::class, function (Faker $faker) {
    return [
        //
        'nombre'=>$faker->name,
        'RFC'=>$faker->ean8,
        'domicilio'=>$faker->address,
        'ciudad'=>$faker->city,
        'telefono1'=>$faker->numerify('993#######'),
        'telefono2'=>$faker->numerify('993#######'),
        'correo'=>$faker->safeEmail,
    ];
});
