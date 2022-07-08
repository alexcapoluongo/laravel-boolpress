@extends('layouts.dashboard')

@section('content')
    <h1>Create a new post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @method('POST')
        @csrf

        <div class="form-group">
          <label for="title">Title</label>
          <input type="title" name="title" class="form-control" id="title" placeholder="Write a title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input type="content" class="form-control" name="content" id="content" placeholder="Write a content" value="{{ old('content')}}">
        </div>
        
        <h3>Tags</h3>
        @foreach ($tags as $tag)
            
        <div class="form-check">
          <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag-{{ $tag->id }}">
          <label class="form-check-label" for="tag-{{ $tag->id }}">
            {{ $tag->name }}
          </label>
        </div>

        @endforeach

        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>
@endsection