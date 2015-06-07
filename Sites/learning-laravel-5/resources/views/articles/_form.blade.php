<div class="form-group">

  {!! Form::hidden('user_id', 1) !!}

  {!! Form::label('title', 'Title:') !!}

  {!! Form::text('title', null, ['class' => 'form-control']) !!}

</div>

<!-- Body Form Input -->
<div class="form-group">

  {!! Form::label('body', 'Body:') !!}

  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('published_at', 'Published On:') !!}

  {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::submit($submitButton, ['class'=> 'btn btn-primary form-control']) !!}

</div>
