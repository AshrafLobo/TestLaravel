@extends ('partials.layout')

@section('content')

	<div class="form_container">
		<form method="POST" action="/posts" class="my_form">
			{{ csrf_field() }}
			<input type="text" name="title" placeholder="Enter Post Title">
			<textarea name="post_content" placeholder="Enter some text here"></textarea>
			<input type="submit" value="Publish Post">	
		</form>
		
		@include('partials.errors')
	</div>
@endsection