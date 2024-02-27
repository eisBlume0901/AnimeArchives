@extends('layout')

@section('content')
@include('partials._search')
<h2>
    {{$anime['title']}}
</h2>
<p>
    {{$anime['description']}}
</p>
@endsection
