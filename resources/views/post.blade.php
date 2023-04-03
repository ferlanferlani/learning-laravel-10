@extends('layouts.main')

@section('container')

<div class="row">
 <div class="col-md-6">
  <div class="post">
   <h2>{{ $post['title'] }}</h2>
   <img src="assets/img/blog/{{ $post['thumbnail'] }} }}">
   <h3>{{ $post['author'] }} </h3>
   <article>
    <p>{{ $post['body'] }}</p>
   </article>
   <a href="/" class="btn btn-sm btn-danger">Back to blog</a>
  </div>
 </div>
</div>  

@endsection