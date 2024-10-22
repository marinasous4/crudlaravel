@extends('index')

@section('content')

<h1>Edit</h1>

@if (session()->has('message'))
{{ session()->get('message') }}
@endif

<form action="{{ route ('filmes.update', ['filme' => $filme->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="nome" value="{{ $filme->nome }}"> <br> <br>
    <input type="text" name="genero" value="{{ $filme->genero }}"> <br> <br>
    <input type="text" name="classificacao" value="{{ $filme->classificacao }}"> <br> <br>
    <input type="text" name="ano" value="{{ $filme->ano }}"> <br> <br>
    <button type="submit">OK</button>
</form>

@endsection