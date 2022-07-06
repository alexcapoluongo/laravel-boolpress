@extends('layouts.dashboard')

@section('content')

<div class="row row-cols-3">
    @foreach($posts as $post)      
    <div class="card" style="width: 18rem;">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->content }}</p>
          <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">See the Post</a>
        </div>
    </div>
    @endforeach

</div>
@endsection