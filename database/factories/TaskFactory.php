<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence,
        'description' => $faker->text(800)
    ];
});
