@extends('master')

@section('content')
    <h2>List of Albums</h2>
    @foreach ($albums as $album)
        <li><a href={{ route('album_path', [$artist->slug, $album->slug]) }}>{{ $album->name }}</a></li>
    @endforeach
@stop