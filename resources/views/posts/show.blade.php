@extends ('partials.layout')

@section('content')
	
	<div class="container">
		<div class="posts_container">
			<h2 class="post_title">{{ $post->title }}</h2>
			<span class="user">- {{ $post->user->name }}</span>
			<p class="post_content">{{ $post->body }}</p>
			@if(count($post->tags))
				<ul>
					@foreach($post->tags as $tag)
						<li>
							<a href="/posts/tag/{{ $tag->name }}">
								{{ $tag->name }}
							</a>
						</li>
					@endforeach
				</ul>
			@endif
		</div>

		<div class="comments">
			@foreach ($post->comments as $comment)
			<article>
				{{ $comment->body }}
			</article>
			<span><strong>{{ $comment->created_at->diffForHumans() }}</strong></span>
			<hr/>
			@endforeach
		</div>

		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>
				</form>
				@include('partials.errors')
			</div>
		</div>
	</div>
@endsection