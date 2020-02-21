<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Course;
use App\Programe ;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Course::class, function (Faker $faker) {
	  $semesters = ['first', 'second'] ;
    return [
        'name' => $faker->name(),
        'code' => Str::random(4),
        'semester' => $semesters[rand(0,1)],
        'programe_id' => Programe::all('id')->random() ,
        'user_id' => User::all('id')->random()

    ];
});
