
@extends('app')

@section('content')

<div class="container">
	<div class="show-auth-login-wrapper">
		<div class="row">
			<div class="col-sm-6">
				<form method="POST" action="/auth/login" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="johndoe@gmail.com" value="{{ old('email') }}">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" id="password">
					</div>

					<div class="form-group">
						<input type="checkbox" name="remember" class="form-control"> Remember Me
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-info">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop