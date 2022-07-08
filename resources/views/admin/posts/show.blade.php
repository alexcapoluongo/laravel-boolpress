@extends('layouts.dashboard')

@section('content')
    <h1>Titolo: {{ $post->title }}</h1>
    <h2>Contenuto:</h2>
    <h3>Categoria {{$category ? $category->name : 'no category'}}</h3>
    <p> {{ $post->content }}</p>
    <p> {{ $post->slug }} </p>
    
    @forelse ($post->tags as $tag)
        {{ $tag->name }}{{ $loop->last ? '' : ', ' }}
    @empty
        no one
    @endforelse
 

    <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post'=> $post->id])}}">Edit</a>
@endsection