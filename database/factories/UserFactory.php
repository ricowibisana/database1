<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'nama'=>$faker->company,
        'harga'=>$faker->numberBetween($min=10000, $max=50000),
        'jumlah'=>$faker->numberBetween($min=10, $max=10),
        'image'=>$faker->picsum('public/image',400,400, false)

    ];
});
