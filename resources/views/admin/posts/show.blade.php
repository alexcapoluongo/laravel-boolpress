@extends('layouts.dashboard')

@section('content')

    <h1>Titolo: {{ $post->title }}</h1>
    <h2>Contenuto:</h2>
    <p> {{ $post->content }}</p>

@endsection