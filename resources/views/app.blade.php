<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Task App</title>
</head>
<body>
@include('partials.nav')
@yield('content')
@include('partials.footer')

<script>

	$(document).ready(function() {
		console.log('jquery is loaded now');

		$.ajax({
			method: "GET",
			url: "/api/tasks"
		})
			.done(function( data ) {
			console.log(data);
		});


		$.ajax({
			method: "DELETE",
			url: "/api/tasks/1"
		})
			.done(function( data ) {
			console.log(data);
		});

	});

</script>
</body>
</html>

