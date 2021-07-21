@extends('layouts.main')

@section('content')
    <h1>Aggiungi un fumetto</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title">
        </div>
        <div class="form-group">
            <label for="series">Nome Serie</label>
            <input type="series" class="form-control" id="series" placeholder="Inserisci il nome della serie" name="series">
        </div>
        <div class="form-group">
            <label for="type">Genere</label>
            <input type="type" class="form-control" id="type" placeholder="Inserisci il genere del fumetto" name="type">
        </div>
        <div class="form-group">
            <label for="thumb">URL Immagine</label>
            <input type="thumb" class="form-control" id="thumb" placeholder="Inserisci l'url dell'immagine" name="thumb">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price">
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form" id="sale_date"  name="sale_date">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" placeholder="Inserisci l'url dell'immagine" name="description" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection