@extends('app')

@section('content')

	<h1>Write a New Article</h1>

	<hr/>

	{!! Form::open(['url' => '/articles']) !!}

		@include('articles._form', ["submitButton" => 'Create Article'])

	{!! Form::close() !!}

  @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif


@endsection('content')

