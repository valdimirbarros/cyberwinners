<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkPlayerGame extends Model
{
    use SoftDeletes;
    protected $table = 'link_player_game';
}
