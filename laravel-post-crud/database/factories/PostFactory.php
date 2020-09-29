<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;

use App\Model;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        
        'title'     => $faker -> word(),
        'text'      => $faker -> text($maxNbChars = 200),
        'category'  => $faker -> word(),
        'like'      => $faker -> numberBetween($min = 0, $max = 100),
        'dislike'   => $faker -> numberBetween($min = 0, $max = 100)

    ];
});
