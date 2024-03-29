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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\School::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'dean' => $faker->name,
        'description' => $faker->sentence,
    ];
});

$factory->define(App\Department::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'manager' => $faker->name,
        'email' => $faker->email,
        'school_id' => $faker->randomDigit,
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'code' => $faker->buildingNumber,
        'description' => $faker->sentence,
    ];
});

$factory->define(App\Budget::class, function (Faker\Generator $faker) {
    return [
        'department_id' => 1,
        'item' => $faker->buildingNumber,
        'quantity' => $faker->randomDigit,
        'price' => $faker->randomDigit,
        'category_id' => 1,
        'status' => 'DRAFT',
        'start_year' => $faker->year,
        'end_year' => $faker->year,
    ];
});
