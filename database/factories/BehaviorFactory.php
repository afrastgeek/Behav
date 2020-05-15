<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Behavior;
use Faker\Generator as Faker;

$factory->define(Behavior::class, function (Faker $faker) {
    return [
        'activity' => $faker->sentence,
        'point' => $faker->randomDigitNot(0) * -10,
    ];
});
