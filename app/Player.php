<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  public function position()
  {
    return $this->belongsTo(\App\Position::class);
  }

  public function team()
  {
    return $this->belongsTo(\App\Team::class);
  }
}
