@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-11">
      <img src="{{asset('storage/' . $post->poster)}}" alt="">
      <h1>{{$post->title}}</h1>
      <h3>{{$post->author}}</h3>
      <p>{{$post->content}}</p>
      <a href="#">{{$post->category->title}}</a>
    </div>
  </div>
</div>
@endsection
