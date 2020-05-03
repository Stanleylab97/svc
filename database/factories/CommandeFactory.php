<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Commande;
use Faker\Generator as Faker;

$factory->define(Commande::class, function (Faker $faker) {
    return [
            'dateCde'=>$faker->dateTime(),
            'dateRetraitBanque'=>$faker->dateTime()
    ];
});
