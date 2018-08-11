@extends('partials.layout')

@section('content')
	
	<div class='container'>
		<div class='col-sm-8'>
			<h1>Register</h1>

			<form action='/register' method='POST'>
				{{ csrf_field() }}
				<div class='form-group'>
					<label for='name'>Name:</label>
					<input type='text' name='name' id='name' class='form-control' required>
				</div>

				<div class='form-group'>
					<label for='email'>	Email:</label>
					<input type='email' name='email' id='email' class='form-control' required>
				</div>

				<div class='form-group'>
					<label for='password'>	password:</label>
					<input type='password' name='password' id='password' class='form-control' required>
				</div>

				<div class='form-group'>
					<label for='password_confirmation'>	password confirmation:</label>
					<input type='password' name='password_confirmation' id='password_confirmation' class='form-control' required>
				</div>

				<div class='form-group'>
					<button type='submit' class='btn btn-primary'>Register</button>
				</div>
				
				@include('partials.errors')
			</form>
		</div>
	</div>
@endsection
