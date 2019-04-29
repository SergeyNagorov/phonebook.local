<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->e164PhoneNumber,
    ];
});
