@extends('layout.default')

@section('pageTitle', 'CreaComics')

@section('content')
<form action="{{route("comic.update") $comic->id}}" method="post">
@csrf

@method('PUT')
<label for="title">titolo</label>
<input type="text" name="title" id="title" value="{{$comic->title}}">

<label for="description">descrizione</label>
<input type="text" name="description" id="description">

<label for="thumb">thumb</label>
<input type="url" name="thumb" id="thumb">

<label for="price">price</label>
<input type="number" name="price" id="price">

<label for="series">series</label>
<input type="text" name="series" id="series">

<label for="sale_date">sasale_dateles_data</label>
<input type="date" name="sale_date" id="sale_date">

<label for="type">type</label>
<input type="text" name="type" id="type">

<input type="submit" value="invia">

</form>
@endsection