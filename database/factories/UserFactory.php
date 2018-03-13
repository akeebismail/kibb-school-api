<?php

use Faker\Generator as Faker;
use Kibb\Kibb\School\Session\Sessions;
use Kibb\Kibb\School\Term\Terms;

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

$factory->define(Kibb\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'mid_name'  => $faker->firstName,
        'username'  => $faker->userName,
        'date_of_birth'=> $faker->date('Y-m-d'),
        'phone' => $faker->phoneNumber,
        'contact' => $faker->phoneNumber,
        'address' => $faker->address,
        'state' => 'osg',
        'country' => $faker->country,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('qwerty'), // secret
        'status' => $faker->randomNumber(2),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Sessions::class, function (Faker $faker){
    $name = $faker->sentence;
   return [
       'name' => $name,
       'slug' => str_slug($name,'-'),
       'start_day' => $faker->date('Y-m-d'),
       'end_day' => $faker->date('Y-m-d'),
       'notification' => $faker->paragraph
   ];
});

$factory->define(Terms::class, function (Faker $faker){
    $name = $faker->name;
     factory(Sessions::class, 3)->create();
    return [
        'name' => $name,
        'slug' => str_slug($name, '-'),
        'session_id' => Sessions::inRandomOrder()->first()->id,
        'start_day' => $faker->date('Y-m-d'),
        'end_day' => $faker->date('Y-m-d'),
        'notification' => $faker->paragraph
    ];
});