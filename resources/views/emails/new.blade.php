<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New reservation</title>
</head>
<body>
	<h1>A new reservation has been made on your account!</h1>

	<p>By: {{ $reservation->user()->name }}</p>
	<p>For this tool: {{ $reservation->tool()->name }} </p>

	<a href="{{ url('login') }}">Check it out!</a>
</body>
</html>