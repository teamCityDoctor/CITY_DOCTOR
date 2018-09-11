@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1> All Discipline <span class="badge badge-light">{{$disciplines->count()}}</span> </h1>
</div>

<div class="container">
  <div class="row">
    @foreach($disciplines as $discipline)
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('discipline.show', ['slug' => $discipline->slug]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h4 class="text-center">{{$discipline->name}}</h4>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <div>
                  <i class="fa fa-user-md"></i> Doctors <span class="badge badge-light">{{$discipline->doctors->count()}}</span>
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
