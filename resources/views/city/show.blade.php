@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1>
    <a class="text-white" href="{{ route('division.show', ['slug' => $city->division->slug]) }}"> <i class="fa fa-arrow-left"></i> </a>{{$city->name}} City</h1>
  <h4>All Hospitals</h4>
</div>

<div class="container">
  <div class="d-flex flex-wrap">
    @foreach($city->hospitals as $hospital)
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('hospital.show', ['slug' => $hospital->slug]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h4 class="text-center">{{$hospital->name}}</h4>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <div>
                  <i class="fa fa-user-md"></i> Doctors <span class="badge badge-light">{{$hospital->doctors->count()}}</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection
