<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,3),
        'discussion_id' => rand(1, 15),
        'content' => $faker->paragraph(5),
        'is_answered' => rand(0,1)
    ];
});
