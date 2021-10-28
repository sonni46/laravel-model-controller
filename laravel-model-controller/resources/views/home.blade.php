@extends('layouts.app')

@section('title', "Homepage")
    


@section('content')
    <h1>Movis</h1>
    <div>
        <div class="">
            <ul >
            @foreach ($dbMovies as $movi)
               <li>
                    <div class="card">
                        <a href="{{route('pagina-movie', ['id' => $movi['id']])}}"><h2>{{$movi["title"]}}</h2></a>
                        <h3>{{$movi["date"]}}</h3>
                        <h3>{{$movi["vote"]}}</h3>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection