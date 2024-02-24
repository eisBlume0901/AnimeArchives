@extends('layout')

@section('content')

<h1>{{$heading}}</h1>

@if(count($animeList) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($animeList as $animeElement)
    <h2>
        <a href="/anime/{{$animeElement['id']}}">{{$animeElement['title']}}</a>
    </h2>
    <p>{{$animeElement['description']}}</p>
@endforeach

@endsection
