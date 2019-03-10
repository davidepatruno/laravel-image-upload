@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h1">Modifica il post con id {{$post->id}}</div>
                <form class="form-group" action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" value="{{$post->title}}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="author">Autore</label>
                        <input type="text" name="author" value="{{$post->author}}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea name="content" rows="8" cols="80" value="{{$post->content}}" class="form-control">{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                              @if($post->category->id == $category->id)
                                <option value="{{$post->category->id}}" selected="{{$post->category->id}}" disabled>{{$post->category->title}}</option>
                              @else
                                <option value="{{$category->id}}">{{$category->title}}</option>
                              @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label class="form-inline" for="file_poster">Carica un'immagine</label>
                      <input type="file" name="file_poster" value="scegli..">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Aggiorna post" />
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
