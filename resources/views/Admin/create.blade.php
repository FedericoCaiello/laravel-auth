@extends('layouts.app')
@section('content')
  <form enctype='multipart/form-data' action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="title" value="">
    </div>
    <div class="form-group">
      <label for="body">body</label>
      <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
      <div class="form-group">
        <label for="tags">Tags</label>
        @foreach ($tags as $tag)
          <div> <span>{{$tag->name}}</span>
             <input type="checkbox" name="tags[]" value="{{$tag->id}}">
           </div>
         @endforeach
      </div>
      <input type="file" name="img" value="">
      <button type="submit" name="button">Salva</button>
    </div>
  </form>
@endsection
