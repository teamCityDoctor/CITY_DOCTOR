@extends('dashboard.master')
@section('content')
@include('partials.errors')
<div class="bg-info text-center py-3 mb-3 text-white">
  Add a Doctor
</div>
<form action="{{ route('dashboard.doctor.store') }}" method="post">
  @if(Session::has('status'))
    <div class="alert alert-success">
      <h2>{{Session::get('status')}}</h2>
    </div>
  @endif
  {{csrf_field()}}
  <division-group></division-group>
  <city-group></city-group>
  <hospital-group></hospital-group>
  <div class="form-group">
    <label for="degree">Degree</label>
    <select name="degree" id="degree" class="form-control">
      @foreach($degrees as $degree)
        <option value="{{$degree->id}}">{{$degree->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="discipline">discipline</label>
    <select name="discipline" id="discipline" class="form-control">
      @foreach($disciplines as $discipline)
        <option value="{{$discipline->id}}">{{$discipline->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group" required>
    <label for="name">Doctor Name</label>
    <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control" required>
  </div>
  
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="address" class="form-control" required>{{old('address')}}</textarea>
  </div>
  <div class="form-group">
    <label for="number">Number</label>
    <input value="{{ old('number') }}" type="text" name="number" id="number" class="form-control" required >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control" required >
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-info">Add a Doctor</button>
  </div>
</form>
@endsection