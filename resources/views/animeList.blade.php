
@extends('layout')

@section('content')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($animeList) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($animeList as $animeElement)

@endforeach
    </div>
@endsection
