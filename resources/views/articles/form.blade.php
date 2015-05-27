<!-- Temporary -->
{!! Form::hidden('user_id', 1) !!}

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
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>