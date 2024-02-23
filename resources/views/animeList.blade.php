<h1>{{$heading}}</h1>

@if(count($animeLists) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($animeLists as $animeElement)
    <h2>
        <a href="/anime/{{$animeElement['id']}}">{{$animeElement['title']}}</a>
    </h2>
    <p>{{$animeElement['description']}}</p>
@endforeach
