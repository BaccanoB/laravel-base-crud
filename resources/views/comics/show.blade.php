@extends('layouts.main')

@section('content')
    <div>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
    <div>
        <h3>{{ $comic->series }}</h3>
        <p>Descrizione: {{ $comic->description }}</p>
        <h4>{{ $comic->type }}</h4>
        <small>{{ $comic->sale_date }}</small> <br>
        <small>Prezzo: {{$comic->price }}&euro;</small>
    </div>
    <a href="{{route("comics.index")}}" class="btn btn-primary">Torna in Comics</a>
@endsection