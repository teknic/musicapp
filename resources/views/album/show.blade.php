<h2>{{ $artist->name }}</h2>
{{ $album->name }}

@foreach($songs as $song)
    <li><a href={{ route('song_path', [$artist->slug, $album->slug, $song->slug]) }}>{{$song->title}}</a></li>
@endforeach