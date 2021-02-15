<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    protected $table = 'game';

    public function link_player_game()
    {
        return $this->hasMany('App\LinkPlayerGame');
    }
}
