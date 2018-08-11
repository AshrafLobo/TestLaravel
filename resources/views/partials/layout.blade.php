<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Laravel Test Project</title>
	<link rel="stylesheet" href="/css/app.css">
	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
	@include('partials.nav')

	@if($flash = session('message'))
		<div id="flash-message" class="alert alert-success" role="alert">	
			{{ $flash }}
		</div>
	@endif

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				@yield('content')
			</div>

			<div class="col-md-4">
				@include('partials.sidebar')
			</div>
		</div>
	</div>
	
	@yield ('footer')
</body>
</html>