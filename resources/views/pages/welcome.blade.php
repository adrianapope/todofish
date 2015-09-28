@extends('app')

@section('content')

<div class="container">
	<div class="about-wrapper">
		<div class="row">
			<div class="col-sm-6">
				<h1>Become a todo fish.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat adipisci iusto, sapiente cupiditate quo commodi, omnis? Provident fuga inventore explicabo laudantium distinctio. Culpa rem autem odit, iure necessitatibus facere tempora.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<a href="/auth/register" class="btn btn-info btn-lg">Sign Up Today</a>
					<p>Already a member?</p>
					<a href="/auth/login" class="btn btn-primary btn-lg">Login</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop