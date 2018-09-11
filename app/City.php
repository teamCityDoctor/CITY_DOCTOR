<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  protected $guarded = [];
  public function division()
  {
    return $this->belongsTo(Division::class);
  }
  public function hospitals()
  {
    return $this->hasMany(Hospital::class);
  }
  public function getRouteKeyName()
  {
      return 'slug';
  }
  public function no_of_doctors()
  {
    $number_of_doctors = 0;
    foreach ($this->hospitals as $hospital) {
      $number_of_doctors += $hospital->doctors->count();
    }
    return $number_of_doctors;
  }

}

//testing
// namespace App;
// $d = City::find(1);
// $d->no_of_doctors();

