<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use App\Library\SkuGenerator;

$factory->define(Product::class, function (Faker $faker) {

    $sku_generator = new SkuGenerator;
    return [
        'name' => $faker->word                                             ,
        'sku' => $sku_generator->getSkuCode(),
        'description' => $faker->sentence(10),
    ];
});