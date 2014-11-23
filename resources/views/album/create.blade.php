@extends('master')

@section('content')
  <h2>Add a Album</h2>

  {!! Form::open(['route' => 'album_store_path', 'files' => true]); !!}

    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('year', 'Year'); !!}
        {!! Form::text('year', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('label', 'Label'); !!}
        {!! Form::text('label', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('picture', 'Picture'); !!}
        {!! Form::file('picture', ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('artist_id', 'Artist'); !!}
        {!! Form::select('artist_id', $artists, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Slug'); !!}
        {!! Form::text('slug', null, ['class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Album', ['class' => 'btn btn-primary']); !!}
    </div>

  {!! Form::close(); !!}
@stop