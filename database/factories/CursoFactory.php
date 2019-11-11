<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Curso::class, function (Faker $faker) {
    return [
        'nombre_curso'=>$faker->text($maxNbChars = 10),
        'descripcion'=>$faker->text($maxNbChars = 50),
    ];
});
