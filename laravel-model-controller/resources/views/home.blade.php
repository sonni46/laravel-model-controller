@extends('layouts.app')

@section('title', "Homepage")
    


@section('movies')
    <h1>movis</h1>
    <div>
        <div>
            <ul>
            @foreach ($dbMovies as $movi)
               <li>
                    <div>
                        <a href=""><h2>{{$movi["title"]}}</h2></a>
                        <h3>{{$movi["date"]}}</h3>
                        <h3>{{$movi["vote"]}}</h3>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection