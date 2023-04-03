@extends('layouts.main')

@section('container')
<div class="row">
 <div class="col-md-4">
  <h1>About Page</h1>
 </div>
</div>
<div class="row justify-content-center">
 <div class="col-md-4 text-center">
  <div class="card shadow">
   <div class="card-body">
    <img src="assets/img/{{ $img }}" class="img-thumbnail" alt="{{ $name }}">
    <div class="info m-3">
    <h3>{{ $name }}</h3>
    <p>{{ $status }}</p>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection