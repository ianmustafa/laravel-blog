<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;

    return [
        'title' => $title,
        'content' => $faker->paragraph,
        'slug' => Str::slug($title),
    ];
});
