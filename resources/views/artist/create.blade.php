@extends('master')

@section('content')
  <h2>Add a Artist</h2>

  {!! Form::open(['route' => 'artist_store_path']); !!}

    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('genre', 'Genre'); !!}
        {!! Form::text('genre', null, ['class' => 'form-control']); !!}
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