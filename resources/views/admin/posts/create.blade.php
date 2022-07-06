@extends('layouts.dashboard')

@section('content')
    <h1>Create a new post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @method('POST')
        @csrf

        <div class="form-group">
          <label for="title">Title</label>
          <input type="title" class="form-control" id="title" placeholder="Write a title">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input type="content" class="form-control" id="content" placeholder="Write a content">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>
@endsection