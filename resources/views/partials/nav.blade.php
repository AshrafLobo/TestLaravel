<div class="navigation">
	<nav>
		<ul>
			<li class="nav_item"><a href="#">Item 1</a></li>
			<li class="nav_item"><a href="#">Item 2</a></li>
			<li class="nav_item"><a href="#">Item 3</a></li>
			<li class="nav_item"><a href="#">Item 4</a></li>

			@if(Auth::check())
				<li><a href="#">{{ Auth::user()->name }}</a></li>
			@endif
	</nav>
</div>