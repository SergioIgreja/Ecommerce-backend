<?php

use Faker\Generator as Faker;
use App\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'author_id' => $faker->unique($reset = true)->numberBetween(1,100),
        'title' => $faker->unique()->sentence(6,true),
        'genre_id' => $faker->numberBetween(1,28),
        'description' => $faker->paragraph(4,true),
        'cover' => $faker->unique()->image(public_path() .'/images',350,560),
        'price' => $faker->randomFloat(2,10,30)
    ];
});
