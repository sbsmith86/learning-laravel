@extends('app')

@section('content')
  <h1>Write a new article</h1>
  <hr>

  {!! Form::open(['url' => 'articles']) !!}
    <!-- Title input -->
    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Body input -->
    <div class="form-group">
      {!! Form::label('body', 'Body:') !!}
      {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Title input -->
    <div class="form-group">
      {!! Form::label('published_at', 'Published On:') !!}
      {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    <!-- Submit button -->
    <div class="form-group">
      {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>

  {!! Form::close() !!}

  @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
@stop