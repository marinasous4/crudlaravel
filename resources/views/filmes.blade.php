@extends('index')

@section('content')

<h1>Filmes</h1>

<a href="{{ route('filmes.create')}}">Create</a>

<thead>
    <th>

    </th>
</thead>

<ul>
    @foreach ($filmes as $filme)
    <tr>
        <td>{{ $filme->nome }}</td> <br>
        <td>{{ $filme->genero }}</td> <br>
        <td>{{ $filme->classificacao }}</td> <br>
        <td>{{ $filme->ano }}</td> <br>

        <form action="">

        </form>

        <a href="{{ route ('filmes.edit', ['filme' => $filme->id]) }}">Edit</a>
        <a href="{{ route ('filmes.show', ['filme' => $filme->id]) }}">Show</a>
        <a href="{{ route ('filmes.destroy', ['filme' => $filme->id]) }}">Delete</a>
        
</ul>
</ul>
@endforeach
<a href="/">home</a>
