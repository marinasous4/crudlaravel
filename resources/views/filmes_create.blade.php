@extends('index')

@section('content')

<h1>Create</h1>

@if (session()->has('message'))
{{ session()->get('message') }}
@endif

<form action="{{ route('filmes.store') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome"> <br> <br>
    <input type="text" name="genero" placeholder="Gênero"> <br> <br>
    <input type="text" name="classificacao" placeholder="Classificação"> <br> <br>
    <input type="text" name="ano" placeholder="Ano"> <br> <br>
    <button type="submit">OK</button>
</form>

@endsection