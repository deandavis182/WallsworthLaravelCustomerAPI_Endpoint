<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        //'Name' => $faker->text(40)
        'Name' => $faker->name($gender = null),
        'Address' => $faker->address(),
        'Phone_Number' => $faker->phoneNumber(),
        'Email_Address' => $faker->email(),
        'Start_Date' => $faker->dateTime($max = '2000-04-25 00:00:00', $timezone = null),
        'Contract_Start_Date' => $faker->dateTimeBetween($startDate = '-19 years', $endDate = 'now', $timezone = null),
        'Contract_Length' => $faker->numberBetween($min = 1, $max = 104)  // 104 weeks in 2 years

    ];
});
