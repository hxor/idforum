<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Discussion::class, function (Faker $faker) {
    return [
        'user_id' => rand(2,3),
        'channel_id' => rand(1,5),
        'slug' => str_slug($faker->sentence(4)),
        'title' => $faker->sentence(5),
        'content' => $faker->paragraph(5),
        'is_solved' => rand(0,1)
    ];
});
