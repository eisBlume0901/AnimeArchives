
@extends('layout')

@section('content')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($animeList) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($animeList as $animeElement)
    <x-card class="hover:bg-customLightPink">
        <x-anime-card :animeElement="$animeElement"></x-anime-card>
{{--        The x-card component is a custom Blade component that we created in card.blade.php.--}}
{{--        We also included the attributes and slot properties in the x-card component.--}}
{{--        The attributes property is a collection of all the attributes passed to the component such as class, id, and style.--}}
{{--        The slot property is a placeholder for the content that will be passed from the parent component to the child component.--}}
    </x-card>
@endforeach
    </div>
@endsection
