<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class LinkPlayerGame extends Model
{
    protected $table = 'link_player_game';

    public function game()
    {
        return $this->belongsTo('App\Game');
    }

    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}
