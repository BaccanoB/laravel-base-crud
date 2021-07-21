@extends('layouts.main')

@section('content')
    <h1>Modifica il fumetto: {{ $comic->title }}</h1>
    <form action="{{route('comics.update',$comic->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="series">Nome Serie</label>
            <input type="series" class="form-control" id="series" placeholder="Inserisci il nome della serie" name="series" value="{{$comic->series}}">
        </div>
        <div class="form-group">
            <label for="type">Genere</label>
            <input type="type" class="form-control" id="type" placeholder="Inserisci il genere del fumetto" name="type" value="{{$comic->type}}">
        </div>
        <div class="form-group">
            <label for="thumb">URL Immagine</label>
            <input type="thumb" class="form-control" id="thumb" placeholder="Inserisci l'url dell'immagine" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price" value="{{$comic->price}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form" id="sale_date"  name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" placeholder="Inserisci l'url dell'immagine" name="description" rows="5">{{$comic->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Modifica</button>
        <a href="{{route("comics.index")}}" class="btn btn-primary">Torna in Comics</a>
    </form>
@endsection