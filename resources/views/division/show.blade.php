@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1>{{$division->name}} Division</h1>
  <h4>All Cities under {{$division->name}}</h4>
</div>

<div class="container">
  <div class="d-flex flex-wrap">
    @foreach($division->cities as $city)
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('city.show', ['slug' => $city->slug]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h2>{{$city->name}}</h2>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <i class="fa fa-hospital-o"></i> Hospitals <span class="badge badge-light">{{$city->hospitals->count()}}</span>
                </div>
                <div>
                  <i class="fa fa-user-md"></i> Doctors <span class="badge badge-light">{{$city->no_of_doctors()}}</span>
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
