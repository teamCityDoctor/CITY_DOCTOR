<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;

class DashboardController extends Controller
{
  public function index()
  {
    // \Auth::loginUsingId(1);
    // $hospitals = Hospital::paginate(20);
    $hospitals = Hospital::where('user_id', auth()->id())->paginate(20);
    return view('dashboard.index', compact('hospitals'));
  }
}
