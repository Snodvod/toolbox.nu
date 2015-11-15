<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Status Changed</title>
</head>
<body>
	<h1>One of your reservation's status' has changed</h1>
	<p>It's status is now: {{ $reservation->status }}</p>
	<a href="{{url('login')}}"></a>
</body>
</html>