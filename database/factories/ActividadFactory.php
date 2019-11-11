<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Actividad::class, function (Faker $faker) {
    return [
        'nombre_actividad'=>$faker->text($maxNbChars = 10),
        'archivo'=>$faker->creditCardDetails,
        'categoria'=>$faker->text($maxNbChars = 50),
        'tiempo'=>$faker->numberBetween($min = 1, $max = 20),
        'orden'=>$faker->numberBetween($min = 1, $max = 20),
        'estado'=>$faker->numberBetween($min = 0, $max = 1),
        'clase_id'=> function(){
            return factory(App\Models\Clase::class)-> create()->id;
        }
    ];
});

