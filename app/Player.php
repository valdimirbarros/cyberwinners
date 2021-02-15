<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Player extends Model
{
    protected $table = 'player';

    public function link_player_game()
    {
        return $this->hasMany('App\LinkPlayerGame');
    }
}
