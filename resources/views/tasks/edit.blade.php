@extends('app')

@section('content')

<div class="container">
	<div class="edit-tasks-wrapper">
		<div class="row">
			<div clas="col-sm-6">
				<h1>Edit Your Task</h1>
				<form method="POST" action="/tasks/{{ $task->id }}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="name">Task Name:</label>
						<input type="text" name="name" class="form-control" id="name" value="{{ $task->name }}">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" class="form-control" id="description" rows="10">{{ $task->description }}</textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info">Submit Changes</button>
					</div>
				</form>

				<div>
					<a href="/tasks/{{ $task->id }}"><span class="btn btn-danger">Nevermind, go back to task</span></a>
				</div>
				<br>
				<div>
					<form method="POST" action="/tasks/{{ $task->id }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-success"> Mark Status Completed</button>
					</form>
				</div>
				<br>
				<div>
					<form method="POST" action="/tasks/{{ $task->id }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="status" value="active">
						<button type="submit" class="btn btn-warning">Mark Status Active</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop