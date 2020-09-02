<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author' => $faker -> name,
        'title' => $faker -> text,
        'subject' => $faker -> text,
        'content' => $faker -> text,
        'views' => 0,
        'created_at' => now(),
        'updated_at' => now()
        //
    ];
});
