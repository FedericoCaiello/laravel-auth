@extends('layouts.app')
@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">user_id</th>
        <th scope="col">title</th>
        <th scope="col">body</th>
        <th scope="col">slug</th>
      </tr>
    </thead>
    <tbody>

        <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          <td>{{$post->body}}</td>
          <td>{{$post->slug}}</td>
          <td><a href="{{route('admin.posts.index', $post)}}">back</a></td>
        </tr>

    </tbody>
  </table>
@endsection
