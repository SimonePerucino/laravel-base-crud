@extends('layout.default')

@section('pageTitle', 'Comic')

@section('content')
<a href="{{route ("comic.index")}}">Torna alla Home</a>
<a href="{{route ("comic.edit")}}">Modifica</a>
@endsection