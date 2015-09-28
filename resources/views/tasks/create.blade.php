
@extends('app')

@section('content')

<div class="container">
	<div class="create-tasks-wrapper">
		<div class="row">
			<div class="col-sm-6">
				<h1>Create Your Task</h1>
				<form method="POST" action="/tasks" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="name">Task Name:</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="Example: Holiday Logistics">
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea name="description" class="form-control" id="body"
						placeholder="Example: Buy flight. Schedule bus tour. Select hotel." rows="10"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop