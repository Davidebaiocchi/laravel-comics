@extends('layouts.app')
@section('title', 'Comics')

<!-- qui inserirò i conenuti della pagina esclusi le parti fisse per tutto il sito -->
@section('content')
    <div class="jumbotron">
        <img src=" {{ asset('img/jumbotron.jpg') }} " alt="">
    </div>
@endsection