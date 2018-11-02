<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    $items = array("ford", "honda", "toyota");

    return [
        'make' => $items[array_rand($items)],
        'model' => $faker->model,
        'year' => $faker->year,
    ];
});
