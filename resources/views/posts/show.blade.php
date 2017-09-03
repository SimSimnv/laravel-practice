@extends('layout.main')


@section('content')

<h2>{{ $post->title }}</h2>

<p>{{ $post->body }}</p>

<div class="comments">
	<ul class="list-group">
		@foreach($post->comments as $comment)
		<article>
			<li class="list-group-item">
				<strong>
					{{ $comment->created_at->diffForHumans() }} :
				</strong>
				{{ $comment->body }}
			</li>
		</article>
	@endforeach
	</ul>
</div>

<hr>

<div class="card">
	<div class="card-block">
		<form method="post" action="/posts/{{ $post->id }}/comments">
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="body" placeholder="Your comment" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add comment</button>
			</div>
		</form>
	</div>
</div>

@endsection