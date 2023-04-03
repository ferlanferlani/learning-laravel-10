@extends('layouts.main')

@section('container')
<div class="row">
 <div class="title mb-3">
  <h1>Home Page</h1>
 </div>
</div>
<div class="row">

 @foreach($posts as $post)
 <div class="col-md-4">
  <div class="card">
   <div class="card-body shadow">
    <img src="assets/img/blog/{{ $post['thumbnail'] }}" class="img-fluid" alt=" $post['title']  }}">
    <h3>{{ $post['title'] }}</h3>
    <h6>{{ $post['author'] }}</h6>
    <p>{{ $post['body'] }}</p>
    <a href="/post/{{ $post['slug'] }}/" class="btn btn-primary btn-sm">View Post</a>
   </div>
  </div>
 </div>
 @endforeach
</div>

@endsection