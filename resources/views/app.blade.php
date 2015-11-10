<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,600italic,300italic,700italic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<div class="small_device">
    <div class="dropdown">
        <ul>
            <li><a href="/tools">Tools</a></li>
            <li><a href="auth/register">Registreren</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </div>
</div>
<div class="nav">
    <div class="col col-65 centered">
        <div class="col">
            @yield('navigation')
        </div>
    </div>
</div>
@yield('content')

</body>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://jquery-ui.googlecode.com/svn-history/r3982/trunk/ui/i18n/jquery.ui.datepicker-nl.js"></script>
<script src="/js/freewall.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
<script src="/js/backstretch.js" type=text/javascript></script>
<script src="/js/jquery-ui.js" type=text/javascript></script>
<script src="/js/main.js" type=text/javascript></script>

</html>