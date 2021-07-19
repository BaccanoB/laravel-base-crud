@extends('layouts.main')

@section('content')
     <table class="mt-4 table table-striped"> 
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Prezzo</th>
                <th>Genere</th>
                <th colspan=3>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->type }}</td>
                <td><a href="{{route("comics.show",$item->id)}}" class="btn btn-success">Show</a></td>  
            </tr>  
            @endforeach
            
        </tbody>
    </table> 
    
@endsection