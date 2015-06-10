@extends('app')

@section('content')

  <h1>Edit: {{ $article->title }}</h1>

  <hr/>

  {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

    @include('articles._form', ["submitButton" => 'Update Article'])

  {!! Form::close() !!}

  @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

@endsection('content')

