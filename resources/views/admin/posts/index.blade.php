@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista dei post</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Contenuto</th>
                <th scope="col">Slug</th>
                <th scope="col">Stato</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
              <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->slug}}</td>
                <td>
                    @if ($post->published)
                        <span class="badge badge-pill badge-success">Pubblico</span>
                    @else
                        <span class="badge badge-pill badge-dark">Privato</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}" type="button" class="btn btn-primary btn-sm">Visualizza</a>
                    <a href="{{route('admin.posts.edit', $post->id)}}" type="button" class="btn btn-warning btn-sm">Modifica</a>
                    <a href="{{route('admin.posts.edit', $post->id)}}" type="button" class="btn btn-danger btn-sm">Elimina</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection