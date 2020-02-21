<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use App\Programe;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->unique()->safeEmail,
        'indexnumber' => random_int(-21474836, 21474836),
        'programe_id' => Programe::all('id')->random() , 
        'remember_token' => Str::random(10)
    ];
});
