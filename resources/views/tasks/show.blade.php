@extends('app')

@section('content')

<div class="container">
	<div class="show-single-task-wrapper">
		<div class="row">
			<div class="col-sm-6">
				<h1>Specific Task</h1>
				<hr>
				<h3>Task Name:</h3>
				<p>{{ ucwords($task->name) }}</p>
				@if($task->description !== "")
					<h3>Description:</h3>
					<p>{{ ucwords($task->description) }}</p>
				@endif
				<h3>Status:</h3>
				<p>{{ ucwords($task->status) }}</p>
			</div>
		</div>

		<br>
		<div class="page-navigation-wrapper">
			<div class="row">
				<div class="col-sm-3">
					<a href="/tasks/{{ $task->id }}/edit"><span class="btn btn-warning">Edit your Task</span></a>
				</div>

				<div class="status-navigation-wrapper">
					<div class="col-sm-3">
						@if($task->status !== 'completed')

							<form method="POST" action="/tasks/{{ $task->id }}" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="status" value="completed">
							<button type="submit" class="btn btn-success">Mark Status Complete</button>
						</form>
						@else
							<form method="POST" action="/tasks/{{ $task->id }}" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="status" value="active">
								<button type="submit" class="btn btn-info">Mark Status Active</button>
							</form>
						@endif
					</div>
				</div>

				<div class="status-navigation-wrapper">
					<div class="col-sm-3">
						<form method="POST" action="/tasks/{{ $task->id }}/delete" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</div>
				</div>

				<div class="breadcrumb-navigation-wrapper">
					<div class="col-sm-3">
						<a href="/tasks" class="btn btn-default">Go Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop