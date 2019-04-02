<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  public function sport()
  {
    return $this->belongsTo(\App\Sport::class);
  }

  public function players()
  {
    return $this->hasMany(\App\Player::class);
  }

  public function positions() {
    return $this->hasManyThrough(\App\Position::class, \App\Sport::class, 'id', 'sport_id', 'sport_id');
  }
}
