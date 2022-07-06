@extends('layouts.dashboard')

@section('content')
    <h1>Edit Post</h1>


    <form  action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name='title' value="{{ old('title') ? old('title') : $post->title }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" id="content" name='content' rows='10'>{{ old('content') ? old('content') : $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection