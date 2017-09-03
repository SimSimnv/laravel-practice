@extends('layout.app')

@section('content')
	<h1><?= $var; ?></h1>
	<h2><?= $var2; ?></h2>

	<ul>
	@foreach ($tasks as $task)
	<li>
		<a href="/task/{{ $task->id }}">
			{{ $task->body }}	
		</a>
	</li>
	@endforeach	
	</ul>
@endsection