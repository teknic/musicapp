@extends('master')

@section('content')
    <h2>List of Artists</h2>
    @foreach ($artists as $artist)
        <li><a href={{ route('artist_path', [$artist->slug]) }}>{{ $artist->name }}</a></li>
    @endforeach
@stop