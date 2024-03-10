
@extends('layout')

@section('content')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($animeList) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($animeList as $animeElement)
        <x-anime-card :animeElement="$animeElement">
            {{--The x-anime-card component is a custom Blade component that we created in anime-card.blade.php.--}}
            {{--We also included the animeElement property in the x-anime-card component.--}}
            {{--The animeElement is an instance of the Anime model.--}}
        </x-anime-card>
@endforeach
    </div>
@endsection


