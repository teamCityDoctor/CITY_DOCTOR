<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Degree;
use App\Discipline;

class DoctorController extends Controller
{
  public function index()
  {
    $doctors = Doctor::paginate(30);
    return view('doctor.index', compact('doctors'));
  }
  public function show($slug)
  {
    $doctor = Doctor::where('slug', $slug)->first();
    return view('doctor.show', compact('doctor'));
  }
  public function create() {
    $degrees = Degree::all();
    $disciplines = Discipline::all();
    return view('dashboard.create_doctor', compact('degrees', 'disciplines'));
  }
  public function store(Request $request) {
    $this->validate($request, [
      'name' => 'required|min:2',
      'email' => 'required|email',
      'address' => 'required|min:4',
      'number' => 'required|min:4',
      'division' => 'required',
      'city' => 'required',
      'hospital' => 'required',
      'degree' => 'required',
      'discipline' => 'required',
    ]);
    Doctor::create([
      'name' => $request->name,
      'email' => $request->email,
      'address' => $request->address,
      'phone' => $request->number,
      'hospital_id' => $request->hospital,
      'degree_id' => $request->degree,
      'discipline_id' => $request->discipline,
      'user_id' => auth()->id()
    ]);
    $request->session()->flash('status', $request->name . ' added successfully.');
    return redirect()->back();

  }
  public function generating_slug($string)
  {
      $slug = str_slug($string);
      $latestSlug = Doctor::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                      ->latest('id')
                      ->limit(1)
                      ->pluck('slug');
      // return ['slug' => $latestSlug];
      if (count($latestSlug) != 0) {
        $pieces = explode('-', $latestSlug);
        $number = intval( end($pieces) );
        $slug = $slug . '-' . ($number + 1);
      }
      return $slug;
  }
  public function destroy (Request $request, $id) {
    Doctor::find($id)->delete();
    $request->session()->flash('status', 'Doctor entry deleted successfully');
    return redirect()->back();
  }
  public function doctors()
  {
    $doctors = Doctor::paginate(20);
    $doctors = Doctor::where('user_id', auth()->id())->paginate(20);
    return view('dashboard.doctors', compact('doctors'));
  }
}
