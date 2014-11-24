@extends('master')

@section('content')
  <h2>Add a Song</h2>

  {!! Form::open(['route' => 'song_store_path']); !!}

    <div class="form-group">
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('lyrics', 'Lyrics'); !!}
        {!! Form::textarea('lyrics', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('length', 'Length'); !!}
        {!! Form::text('length', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('video_link', 'Video Link'); !!}
        {!! Form::text('video_link', null, ['class' => 'form-control']); !!}
     </div>

    <div class="form-group">
        {!! Form::label('album_id', 'Album'); !!}
        {!! Form::select('album_id', $albums, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Slug'); !!}
        {!! Form::text('slug', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Artist', ['class' => 'btn btn-primary']); !!}
    </div>

  {!! Form::close(); !!}
@stop