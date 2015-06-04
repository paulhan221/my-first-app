@extends('app')

@section('content')

	<h3>People I Like:</h3>

	@foreach ($people as $person)

	<ul>

		<li>{{ $person }}</li>

	</ul>
	
	@endforeach
	

@endsection('content')