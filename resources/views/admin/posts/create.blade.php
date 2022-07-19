@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Crea un post</h1>   
    </div>
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Contenuto:</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="5" name="content"></textarea>
            </div>
            <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="published" name="published">
              <label class="form-check-label" for="published">Pubblica il post</label>
            </div>
            <button type="submit" class="btn btn-primary">Crea Post</button>
        </form>
    </div>
@endsection