<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
  protected $guarded = [];
  public function cities () {
    return $this->hasMany(City::class);
  }
  public function no_of_hospitals () {
    $number_of_hospital = 0;
    foreach ($this->cities as $city) {
      $number_of_hospital += $city->hospitals->count();
    }
    return $number_of_hospital;
  }
  public function no_of_doctors()
  {
    $number_of_doctors = 0;
    foreach ($this->cities as $city) {
      foreach ($city->hospitals as $hospital) {
        $number_of_doctors += $hospital->doctors->count();
      }
    }
    return $number_of_doctors;
  }
}

//testing
// namespace App;
// $d = Division::find(1);
// $d->no_of_doctors();

