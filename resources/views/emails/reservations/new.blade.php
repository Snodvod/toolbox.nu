<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New reservation</title>
</head>
<body>
	<h1>A new reservation has been requested!</h1>

	<p>By: {{ $reservation->user()->first()->name }}</p>
	<p>For this tool: {{ $reservation->tool()->first()->name }} </p>

	<a href="{{ url('login') }}">Check it out!</a>
</body>
</html>