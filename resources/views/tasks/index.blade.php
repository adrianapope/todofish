@extends('app')

@section('content')

<div class="container">
	<div class="index-display-title-wrapper">
		<div class="row">
			<div class="col-sm-9">
				<h1>Tasks</h1>
			</div>
		</div>
	</div>

	<hr>

	<div class="index-display-tasks-wrapper">
		@if(count($tasks))
			@foreach($tasks as $task)
				<div class="row task-single @if($task->status == 'completed') task-completed @endif">
					<div class="col-sm-1">
						<form method="POST" action="/tasks/{{ $task->id }}" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="status" value="completed">
							<button type="submit" class="btn btn-default checkmark">√</button>
						</form>
					</div>
					<div class="col-sm-10">
						<h3><a href="/tasks/{{ $task->id }}">{{ ucwords($task->name) }}</a></h3>
					</div>
					<div class="col-sm-1">
						<form method="POST" action="/tasks/{{ $task->id }}/delete" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="btn btn-danger">X</button>
						</form>
					</div>
				</div>
			@endforeach
			{!! $tasks->render() !!}
		@else
			<h3>There are no currently no tasks to display.</h3>
		@endif
	</div>

	<hr>

	<div class="row">
		<div class="col-sm-3">
			<a href="/tasks"><span class="btn btn-default">View All</span></a>
		</div>
		<div class="col-sm-3">
			<a href="/tasks/active"><span class="btn btn-default">View Active</span></a>
		</div>
		<div class="col-sm-3">
			<a href="/tasks/completed"><span class="btn btn-default">View Completed</span></a>
		</div>
		<div class="col-sm-3">
			<a href="/tasks/clear"><span class="btn btn-default">Clear Completed</span></a>
		</div>
	</div>
</div>
@stop