<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Signataire;
use Faker\Generator as Faker;

$factory->define(Signataire::class, function (Faker $faker) {
    return [
       'nom'=>$faker->name($gender ='male'),
       'prenom'=>$faker->firstNameMale()
    ];
});
