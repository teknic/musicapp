<h2>{{ $artist->name }}</h2>
<h3>{{ $artist->genre }}</h3>

@foreach($albums as $album)
    <li><a href={{ route('album_path', [$artist->slug, $album->slug]) }}>{{ $album->name }}</a></li>
@endforeach