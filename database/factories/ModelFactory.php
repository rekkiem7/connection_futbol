<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$factory->define(App\Role::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'name' => $faker->name,
        'active' => $faker->name,
    ];
});


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
    	'password'=>$faker->name,
        'name' => $faker->name, 
        'email' => $faker->name, 
        'password' => $faker->name,
        'facebook_id' => $faker->name,
        'cellphone' => $faker->name,
        'lastname' => $faker->name,
        'rut' => $faker->name,
        'name_user' => $faker->name,
        'image'=>$faker->name,
        'active'=>$faker->name,
    ];
});

$factory->define(App\FormatLeague::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'name' => $faker->name,
        'numberPlayers'=> $faker->name,
        'places'=> $faker->name,
        'active' => $faker->name,
    ];
});

$factory->define(App\League::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'name' => $faker->name,
        'address' => $faker->name,
        'format_id' => $faker->name,
        'escude' => $faker->name,
        'active' => $faker->name,
    ];
});

$factory->define(App\CategoryLeague::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'name'=> $faker->name,
        'league_id'=> $faker->name,
        'order'=> $faker->name,
        'active'=> $faker->name,
    ];
});


