@extends('dashboard.master')
@section('content')
<div class="bg-info text-center py-3 mb-3 text-white">
  All Hospitals
</div>
@if(Session::has('status'))
  <div class="alert alert-success">
    <h2>{{Session::get('status')}}</h2>
  </div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th>Hospital Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($hospitals as $hospital)
      <tr>
        <td> <a href="{{route('hospital.show', ['hospital' => $hospital->slug])}}">{{$hospital->name}}</a></td>
        <td>
          <form action="{{route('dashboard.hospital.destroy', ['id' => $hospital->id])}}" method="post">
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
  {{$hospitals->links('vendor.pagination.bootstrap-4')}}
</div>
@endsection