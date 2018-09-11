@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1> <i class="fa fa-user-md"></i> All Doctors  <span class="badge badge-light"> {{$doctors->total() }}</span></h1>
</div>
<div class="container">
  <div class="d-flex flex-wrap">
    @foreach($doctors as $doctor)
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('doctor.show', ['slug' => $doctor->slug]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h2>{{$doctor->name}}</h2>
            </div>
            <div class="card-body">
              <div class="text-center">
                <div class="mb-3">
                  <img class="rounded-circle" src="{{ asset('image/people/' . (intval($doctor->id % 98) + 1) .'.jpg') }}" alt="">
                </div>
                <div></div>
                <div class="d-inline-block">
                  <i class="fa fa-user-md"></i> {{$doctor->discipline->name}} - {{$doctor->degree->name}}
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
<div class="p-3">
  <div class="d-flex justify-content-center">
    {{$doctors->links('vendor.pagination.bootstrap-4')}}
  </div>
</div>
@endsection
