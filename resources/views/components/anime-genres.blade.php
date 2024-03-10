@props(['genresCSV'])

@php
    $genres = array_map('trim', explode(',', $genresCSV));
@endphp

<ul class="flex">
    @foreach($genres as $genre)
        <li class="flex items-center justify-center bg-customPurple text-white hover:text-customLightPink hover:bg-customDarkPink rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?genre={{$genre}}">{{$genre}}</a>
        </li>
    @endforeach
</ul>

