<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
  use Sluggable;

  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'name'
          ]
      ];
  }
  protected $guarded = [];
  public function doctors()
  {
    return $this->hasMany(Doctor::class);
  }
  public function city()
  {
    return $this->belongsTo(City::class);
  }
  public function getRouteKeyName()
  {
      return 'slug';
  }
}
