<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
  public function show($slug)
  {
    $city = City::where('slug', $slug)->first();
    return view('city.show', compact('city'));
  }
}
