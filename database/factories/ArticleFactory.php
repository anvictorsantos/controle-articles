<?php

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'description' => $faker->paragraph()
    ];
});
