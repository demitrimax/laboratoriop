<?php

use Faker\Generator as Faker;
use App\medicosMVZ;

//$faker->create('es_ES');
$factory->define(medicosMVZ::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->name,
        'domicilio' => $faker->address,
        'ciudad' => $faker->city,
        'RFC' => $faker->word,
        'telefono1' => $faker->numerify('993#######'),
        'telefono2' => $faker->numerify('993#######'),
        'mr'=>$faker->word,
        'vigencia' =>$faker->date($format="Y-m-d", $max = "+2 years"),
        'preferente' =>$faker->boolean
    ];
});
