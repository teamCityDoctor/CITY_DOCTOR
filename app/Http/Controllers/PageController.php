<?php

namespace App\Http\Controllers;
use App\City;
use App\Hospital;
use App\Doctor;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('index');
  }
  public function search()
  {
    $query = request('query');
    $cities = City::where('name', 'like', "%{$query}%")->get();
    $doctors = Doctor::where('name', 'like', "%{$query}%")->get();
    $hospitals = Hospital::where('name', 'like', "%{$query}%")->get();
    return view('search.index', compact('cities', 'doctors', 'hospitals', 'query'));
  }
}
