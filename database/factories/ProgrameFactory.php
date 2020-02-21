<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Programe;
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

$factory->define(Programe::class, function (Faker $faker) {
	  $levelValues = ['100','200','300','400'] ;
	  $sessionValues = ['morning', 'evening'] ;
	  $qualificationValues = ['degree','diploma'] ;
	  $codes = ['1MD','1ED','2MD','2ED','3MD','3ED','4MD','4ED'] ;
    return [
        'level' => $levelValues[rand(0,3)],
        'session' => $sessionValues[rand(0,1)],
        'qualification' => $qualificationValues[rand(0,1)],
        'code' => $codes[rand(0,7)]
    ];
});
