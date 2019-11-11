<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Clase::class, function (Faker $faker) {
    return [
        'nombre_clase'=>$faker->text($maxNbChars = 10),
        'orden'=>$faker->randomDigit,
        'horario'=>$faker->time($format = 'H:i', $max = '24:00'),
        'curso_id'=> function(){
            return factory(App\Models\Curso::class)-> create()->id;
        },
        'estado'=>$faker->numberBetween($min = 0, $max = 1),
    ];
});
