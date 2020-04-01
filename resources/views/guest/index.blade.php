@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
          @auth
            Authenticated
          @endauth
          @foreach ($posts as $post)
              <div class="card mt-3 mb-3">
                <h2>{{$post->title}}</h2>
                <small>Written by: {{$post->user->name}}</small>
                <div>
                  {{$post->body}}
                </div>
              </div>
            </div>
              <a href="{{route('posts.show', $post->slug)}}">Leggi</a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection
