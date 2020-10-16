<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker -> text,
        'subject' => $faker -> text,
        'content' => $faker -> text,
        'user_id' => User::all()->random()->where('id', '<', 3)->first(),
        'views' => 0,
        'created_at' => now(),
        'updated_at' => now()
        //
    ];
});
