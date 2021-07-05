@extends('layout.default')

@section('pageTitle', 'elencoComics')

@section('content')
<a href="{{route ("comic.create")}}">Aggiungi</a>
<a href="{{route ("comic.show")}}">Dettagli</a>
<a href="{{route ("comic.edit")}}">Modifica</a>

@endsection