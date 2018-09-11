<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
  protected $guarded = [];
  public function doctors()
  {
    return $this->hasMany(Doctor::class);
  }
}
