<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wachtwoord vergeten... dommerik</title>
</head>
<body>

	<h1>You stupid prick, forgot your password...</h1>
	<p>Only this time, we will allow you to reset it!</p>
	{{ url('password/reset/'.$token) }}
	
</body>
</html>