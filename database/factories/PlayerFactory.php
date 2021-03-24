<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Player::class, function (Faker $faker) {
    $playerName = $faker->name();
    return [
        'name' => $playerName,
        'slug' => Str::slug($playerName, '-'),
        'nickname' => '~ The '. $playerName . ';1',
        'description' => $faker->text(),
        'email' => $faker->email(),
        'external_profile' => 'https://steamcommunity.com/id/'. Str::slug($playerName, '-'),
        'pontuation' => rand(100,2) / 10 * rand(10,2)
    ];

});
