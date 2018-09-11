<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
  use Sluggable;

  protected $guarded = [];
  public function hospital()
  {
    return $this->belongsTo(Hospital::class);
  }
  public function degree()
  {
    return $this->belongsTo(Degree::class);
  }
  public function discipline()
  {
    return $this->belongsTo(Discipline::class);
  }
  public function getRouteKeyName()
  {
      return 'slug';
  }
  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'name'
          ]
      ];
  }
}
