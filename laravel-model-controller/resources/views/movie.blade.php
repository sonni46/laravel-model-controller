@extends('layouts.app')

@section('title', $dbMovie['title'])

@section('content')
    <div>
        <h1>Titolo {{ $dbMovie['title']}}</h1>
        <h2>Titolo originale: {{$dbMovie['original_title']}}</h2>
        <h2>Nationality: {{$dbMovie['nationality']}}</h2>
        <h2>Anno di uscita: {{$dbMovie['date']}}</h2>
        <h2>Voto: {{$dbMovie['vote']}}</h2>
    </div>
    <div>
        <a href="{{route('pagina-home')}}">Home</a>
    </div>
@endsection