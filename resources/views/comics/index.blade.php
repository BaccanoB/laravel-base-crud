@extends('layouts.main')

@section('content')

    <h1>Lista fumetti</h1>

    @if (session('deleted'))
        <div class="alert alert-success">
            {{session('deleted')}}
        </div>
        
    @endif
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
                <td><a href="{{route("comics.edit",$item->id)}}" class="btn btn-secondary">Edit</a></td>  
                <td>
                    <form action="{{route('comics.destroy',$item->id)}}" method="POST" onsubmit="return confirm('Vuoi davvero cancellare {{$item->title}} ?')">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>  
            </tr>  
            @endforeach
            
        </tbody>
    </table> 
    
@endsection