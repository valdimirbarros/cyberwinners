<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LinkPlayerGame;
use Faker\Generator as Faker;

$factory->define(LinkPlayerGame::class, function (Faker $faker) {
    return [
        'player_id' => random_int(1,10),
        'game_id' =>  random_int(1,11)
    ];
});
