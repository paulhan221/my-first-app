@extends('app')

@section('content')

	<h1>Justin Bieber Songs</h1>

	@foreach ($songs as $index => $song)
		<li><a href='/songs/{{$index}}'>{{$song}}</li>
	@endforeach

@endsection
d