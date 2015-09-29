@extends('app')

@section('content')

<div class="container">
	<div class="show-auth-login-wrapper">
		<div class="row">
			<div class="col-sm-6">
				<form method="POST" action="/auth/register" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="name" name="name" class="form-control" id="name" placeholder="John Doe" value="{{ old('name') }}">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="johndoe@gmail.com" value="{{ old('email') }}">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control" id="password">
					</div>
					<div class="form-group">
						<label for="password_confirmation">Confirm Password:</label>
						<input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
					</div>
					<div>
						<button type="submit" class="btn btn-info">Register</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<img src="/img/fishy.png" alt="orange fish" class="img-rounded img-responsive">
			</div>
		</div>
	</div>
</div>
@stop

