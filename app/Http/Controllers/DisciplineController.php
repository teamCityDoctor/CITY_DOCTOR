<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discipline;
use App\Doctor;

class DisciplineController extends Controller
{
  /**
   * showing all disciplines
   * @return view;
   */
  public function index()
  {
    $disciplines = Discipline::all();
    return view('discipline.index', compact('disciplines'));
  }

  /**
   * showing single discipline
   * @param String $slug 
   * @return view  
   */
  public function show($slug)
  {
    $discipline = Discipline::where('slug', $slug)->first();
    $doctors = Doctor::where('discipline_id', $discipline->id)->paginate(18);
    return view('discipline.show', compact('discipline', 'doctors'));
  }
}
