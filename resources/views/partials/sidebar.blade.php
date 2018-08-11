<div class="archives">
	<h1>ARCHIVES</h1>

	<ul>
		@foreach($archives as $stats)
			<li>
				<a href="?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
					{{ $stats['month'].' '.$stats['year'] }}
				</a>
			</li>
			<hr>
		@endforeach
	</ul>
</div>

<div class="tags">
	<h1>TAGS</h1>

	<ul>
		@foreach($tags as $tag)
			<li>
				<a href="/posts/tag/{{ $tag }}">
					{{ $tag }}
				</a>
			</li>
			<hr>
		@endforeach
	</ul>
</div>
