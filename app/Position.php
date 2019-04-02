<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
  public function sport()
  {
    return $this->belongsTo(\App\Sport::class);
  }

  public function players()
  {
    return $this->hasMany(\App\Player::class);
  }
}
