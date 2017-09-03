	<div class="blog-post">
	<a class="blog-post-title" href="/posts/{{ $post->id }}">{{ $post->title }}</a>
	<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Mark</a></p>

	<p>{{ $post->body }}</p>
	</div><!-- /.blog-post -->