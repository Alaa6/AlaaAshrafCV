<?php

use Faker\Generator as Faker;

$factory->define(App\projects::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence(1),
        'body' =>$faker->sentence(1),
    ];
});
