<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Channel::class, function (Faker $faker) {
    return [
        'slug' => str_slug($faker->sentence(2)),
        'title' => $faker->sentence(3)
    ];
});
