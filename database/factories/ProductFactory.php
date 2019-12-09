<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Product::class, function (Faker $faker) {
    $path = storage_path('app/public/productosImg');
    return [
        'id'            =>  $faker->numberBetween(1,900),
        'nombre'        =>  $faker->word,
        'precio'        =>  $faker->numberBetween(1,900),
        'descripcion'    =>  $faker->paragraph(3),
        'categoria_id'  =>  Category::all()->random()->id,
        'poster'        =>  $faker->image($path, 580, 580, 'technics', false),
    ];
});



// $table->bigIncrements('id');
// $table->string('nombre');
// $table->string('precio');
// $table->string('descripcion');
// $table->timestamps();
// $table->bigInteger('categoria_id')->unsigned();
// $table->string('poster');
