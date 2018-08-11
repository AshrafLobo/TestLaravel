<div class="posts_container">
	<h2 class="post_title"><a href="/posts/{{ $post->id }}"> {{ $post->title }}</a></h2>
	<span class="user">{{ $post->user->name }}</span>
	<span class="date">{{ $post->created_at->toFormattedDateString() }}</span>
	<p class="post_content">{{ $post->body }}</p>
</div>

