@extends('layouts.app')
@section('title', 'Comics')

<!-- qui inserirò i conenuti della pagina esclusi le parti fisse per tutto il sito -->
@section('content')
    <div class="jumbotron">

    </div>
    <span class="x">
        current series
    </span>
    <div class="albums">
        @foreach($albums as $album)
        <div class="card">
            <img src="{{ $album['thumb']}}" alt="{{ $album['title']}}">
            <p> {{ $album['title'] }} </p>
        </div>
@endsection