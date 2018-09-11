@extends('dashboard.master')
@section('content')
<div class="bg-info text-center py-3 mb-3 text-white">
  All doctors
</div>
@if(Session::has('status'))
  <div class="alert alert-success">
    <h2>{{Session::get('status')}}</h2>
  </div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th>Doctor Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($doctors as $doctor)
      <tr>
        <td> <a href="{{route('doctor.show', ['doctor' => $doctor->slug])}}">{{$doctor->name}}</a></td>
        <td>
          <form action="{{route('dashboard.doctor.destroy', ['id' => $doctor->id])}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE" >
            <button class="btn btn-outline-danger" type="submit">delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="p-3">
  {{$doctors->links('vendor.pagination.bootstrap-4')}}
</div>
@endsection