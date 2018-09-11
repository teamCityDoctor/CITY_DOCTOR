@extends('master')
@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-md-6 m-auto">
      <form action="{{ asset('search') }}">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder="search city, hospital, doctor.......">
            <button type="submit" style="cursor: pointer;" class="input-group-addon"> <i class="fa fa-search"></i> </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="d-flex justify-content-center mt-3">
      @include('map')
  </div>
</div>
@endsection

