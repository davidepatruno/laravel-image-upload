@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>TITOLO</th>
              <th>AUTORE</th>
              <th>TESTO</th>
              <th>CATEGORIA</th>
              <th>CREATO IL</th>
              <th>DETTAGLIO</th>
              <th>MODIFICA</th>
            </tr>
          </thead>
          <tbody>
              @foreach($posts as $post)
                <tr>
                  <th>{{$post->id}}</th>
                  <th>{{$post->title}}</th>
                  <th>{{$post->author}}</th>
                  <th>{{$post->content}}</th>
                  <th>{{$post->category->title}}</th>
                  <th class="col-2">{{$post->created_at}}</th>
                  <th>
                    <a class="btn btn-success" href="{{route('posts.show', $post->id)}}">Vai</a>
                  </th>
                  <th>
                    <a class="btn btn-primary" href="{{route('posts.edit', $post->id)}}">Edit</a>
                  </th>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
