<?php

use Faker\Generator as Faker;
use Kibb\Kibb\School\Session\Sessions;
use Kibb\Kibb\School\Term\Terms;
use Kibb\Kibb\School\Level\Levels;
use Kibb\Kibb\School\SchoolClass\Type\ClassType;
use Kibb\Kibb\School\SchoolClass\Classes;
use Kibb\Kibb\School\Subject\Subject;

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

$factory->define(Levels::class, function (Faker $faker){
    $name = $faker->word;

    return [
        'name' => $name,
        'slug' => str_slug($name,'-'),
        'details' => $faker->paragraph
    ];
});

$factory->define(ClassType::class,function (Faker $faker){
    $name = $faker->word;
    return [
        'name' => $name,
        'slug' => str_slug($name,'-'),
        'description' => $faker->paragraph,
        'level_id' => Levels::inRandomOrder()->first()->id
    ];
});

$factory->define(Classes::class, function (Faker $faker){
    $name = $faker->word;
    return [
        'name' => $name,
        'slug' => str_slug($name,'-'),
        'code' => $faker->word,
        'level_id' => Levels::inRandomOrder()->first()->id,
        'class_type_id' => ClassType::inRandomOrder()->first()->id,
    ];
});

$factory->define(Subject::class, function (Faker $faker){
    $name = $faker->unique()->sentence;
    return [
        'name' => $name,
        'slug' => str_slug($name, '-'),
        'details' => $faker->paragraph,
        'level_id' => Levels::inRandomOrder()->first()->id

    ];
});