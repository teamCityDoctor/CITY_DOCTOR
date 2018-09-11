@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1>
    <a class="text-white" href="{{ route('hospital.show', ['slug' => $doctor->hospital->slug]) }}"> <i class="fa fa-arrow-left"></i> </a>
    {{$doctor->name}}
  </h1>
  <h2>{{$doctor->discipline->name}}</h2>
</div>

<div class="container">
  <div class="d-flex flex-wrap">
      <div class="col-md-6 col-lg-6 m-auto">
          <div class="card my-3 text-white bg_random_color">
            <div class="card-body">
              <div class="text-center">
                <img class="rounded-circle my-3" src="{{ asset('image/people/' . (intval($doctor->id % 98) + 1) .'.jpg') }}" alt="">
                <div>
                  Name: {{$doctor->name}}
                </div>
                <div>
                  Email: {{$doctor->email}}
                </div>
                <div>
                  contact: {{$doctor->phone}}
                </div>
                <div>
                  Hospital: {{$doctor->hospital->name}}
                </div>
                <div>
                  <i class="fa fa-user-md"></i> {{$doctor->discipline->name }} - {{$doctor->degree->name}}
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection
