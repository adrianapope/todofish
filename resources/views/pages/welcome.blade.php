@extends('app')

@section('content')

<div class="container">
	<div class="about-wrapper">
		<div class="row">
			<div class="col-sm-6">
				<h1>Become a ToDo fish.</h1>
					<p>Swimming in tasks? If you need somewhere to put down your thoughts, ToDoFish has got you covered! Organize all your tasks in one easy place. Create, update, and delete tasks on the fly. Keep track of tasks you've already completed and those that are still active with one simple click.
					</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<a href="/auth/register" class="btn btn-info btn-lg">Sign Up Today</a>
			</div>
		</div>

		<div class="404-photo-wrapper">
			<div class="row">
				<div class="col-sm-6">
					<img src="/img/fishy.png" alt="orange fish" class="img-rounded img-responsive">
				</div>
			</div>
		</div>
	</div>
</div>
@stop