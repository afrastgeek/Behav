<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => "$faker->firstName $faker->lastName",
        'student_id_number' => $faker->numerify('#######'),
    ];
});
