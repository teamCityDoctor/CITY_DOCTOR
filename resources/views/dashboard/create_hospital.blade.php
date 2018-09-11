@extends('dashboard.master')
@section('content')
@include('partials.errors')
<div class="bg-info text-center py-3 mb-3 text-white">
  Add a Hospital
</div>
<form action="{{ route('dashboard.hospital.store') }}" method="post">
  @if(Session::has('status'))
    <div class="alert alert-success">
      <h2>{{Session::get('status')}}</h2>
    </div>
  @endif
  {{csrf_field()}}
  <division-group></division-group>
  <city-group></city-group>
  <div class="form-group" required>
    <label for="name">Hospital Name</label>
    <input type="text" name="name" id="name" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="address" class="form-control" required></textarea>
  </div>
  <div class="form-group">
  <label for="number">Emergency Number</label>
      <input type="text" name="number" id="number" class="form-control" required >
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-info">Add a hospital</button>
  </div>
</form>
@endsection