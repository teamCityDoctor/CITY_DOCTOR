<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Hospital;

class HospitalController extends Controller
{
  public function show($slug)
  {
    $hospital = Hospital::where('slug', $slug)->first();
    return view('hospital.show', compact('hospital'));
  }
  public function create() {
    return view('dashboard.create_hospital');
  }
  public function store(Request $request) {
    $this->validate($request, [
      'name' => 'required|min:2',
      'address' => 'required|min:4',
      'number' => 'required|min:4',
      'division' => 'required',
      'city' => 'required',
    ]);
    Hospital::create([
      'name' => $request->name,
      'address' => $request->address,
      'phone' => $request->number,
      'city_id' => $request->city,
      'user_id' => auth()->id()
    ]);
    $request->session()->flash('status', $request->name . ' added successfully.');
    return redirect()->back();

  }
  public function generating_slug($string)
  {
      $slug = str_slug($string);
      $latestSlug = Hospital::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
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
    Hospital::find($id)->delete();
    $request->session()->flash('status', 'Hospital entry deleted successfully');
    return redirect()->back();
  }
}
