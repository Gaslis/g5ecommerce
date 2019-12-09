<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'id'            =>  $faker->numberBetween(1,900),
        'name'          =>  $faker->word,
    ];
});

// $table->bigIncrements('id');
// $table->string('name');
// $table->timestamps();
