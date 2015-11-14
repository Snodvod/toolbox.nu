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
    <div class="col col-80 centered">
        <div class="col">
            <div id="nav_logo">
                <a href="/"><img src="/img/logo.svg"></a>
            </div>
            <div class="nav_links">
                <div class="standard_device">
                    <div id="nav_main">
                        <div class="nav_item">
                            <a href="/tools">Tools</a>
                        </div>
                    </div>
                    <div id="nav_auth">
                        @if (Auth::check())
                            <div class="nav_item notifications">
                                <a href="#notificaties"><i class="fa fa-bell fa-fw"></i></a>

                                <div class="notifications_amount">3</div>

                                <div class="dropdown">
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Notification</a></li>
                                        <li><a href="#">Notification</a></li>
                                        <li><a href="#">Notification</a></li>
                                    </ul>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                            <div class="nav_item user">
                                <a href="#">Mijn profiel <i class="fa fa-chevron-down"></i></a>

                                <div class="dropdown">
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="/profile" class="dropdown_profile">
                                                <div id="user_pic">
                                                    <img src="/img/sample_profile.jpg">
                                                </div>
                                                <p>
                                                    {{ Auth::User()->name }}
                                                </p>
                                            </a>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Instellingen</a></li>
                                        <li><a href="/auth/logout">Uitloggen</a></li>
                                    </ul>
                                </div>
                            </div>@else
                            <div id="register" class="nav_item">
                                <a href="/auth/register">Registreren</a>
                            </div>
                            <div class="nav_item" id="showlogin">
                                <a href="#">Login</a>
                            </div>@endif
                        <div id="login_box">
                            <form method="POST" action="/auth/login">
                                {!! csrf_field() !!}
                                <div class="input-group">
                                    <div>
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div>
                                        <label>Wachtwoord</label>
                                        <input type="password" name="password" id="password">
                                    </div>

                                    <div>
                                        <button type="submit">Login</button>
                                    </div>
                                </div>

                                <div class="checkbox">
                                    <input type="checkbox" name="remember"> Remember Me
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small_device">
                <div class="hamburger">
                    <i class="fa fa-bars fa-2x fa-fw"></i>
                </div>
            </div>
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