@extends('index')

@section('content')

<h1>Show</h1>

<form action="{{ route('filmes.destroy', ['filme' => $filme->id]) }}" method="post">
@csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">OK</button>
</form>

@endsection