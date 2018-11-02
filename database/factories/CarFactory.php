<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    $items = array("ford", "honda", "toyota");

    return [
        'make' => $items[array_rand($items)],
        //'make' => $faker->make,
        'model' => $faker->company,
        'year' => $faker->year($max = 'now'),
    ];
});
