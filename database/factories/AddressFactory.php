<?php

use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'phone'=> $faker->phoneNumber,
        'zip'=> $faker->postcode,
        'address'=> $faker->address
    ];
});
