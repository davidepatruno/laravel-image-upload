@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h1">Aggiungi nuovo post</div>
                <form class="form-group" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" placeholder="Inserisci un titolo" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="author">Autore</label>
                        <input type="text" name="author" placeholder="Inserisci un autore" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea name="content" rows="8" cols="80" placeholder="Inserisci il content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label class="form-inline" for="file_poster">Carica un'immagine</label>
                      <input type="file" name="file_poster" value="scegli..">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Salva post" />
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
