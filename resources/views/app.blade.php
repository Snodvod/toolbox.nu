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

                                <div class="amount notifications_amount">3</div>

                                <div class="dropdown">
                                    <ul class="dropdown-menu">
                                        @foreach(Auth::user()->tools as $usertool)
                                            @foreach($usertool->reservations as $userreservation)
                                                @if(!$userreservation->status->accepted && !$userreservation->status->denied)
                                                    <li id="{{$userreservation->id}}">
                                                        <div class="notification">
                                                            <div class="notification_content">
                                                                <div class="notification_pic">
                                                                    <img src="/img/sample_profile.png">
                                                                </div>
                                                                <div class="notification_message">
                                                                    <p>
                                                                        <span>{{Auth::user()->name}}</span>
                                                                        wilt uw
                                                                        <span>{{$usertool->name}}</span>
                                                                        lenen van
                                                                        <span>{{$userreservation->start}}</span>
                                                                        Tot
                                                                        <span>{{$userreservation->stop}}</span>
                                                                    </p>

                                                                    <p class="notification_date">
                                                                        {{$userreservation->created_at}}
                                                                    </p>
                                                                </div>
                                                                <div class="notification_tool">
                                                                    <img src="/img/sample_tool.png">
                                                                </div>
                                                            </div>
                                                            <div class="notification_actions">
                                                                <div class="action notstatus"
                                                                     data-id="{{$userreservation->id}}"
                                                                     data-val="accepted">
                                                                    <h5>Accepteren</h5>
                                                                    <i class="fa fa-check fa-fw"></i>
                                                                </div>
                                                                <div class="action notstatus"
                                                                     data-id="{{$userreservation->id}}"
                                                                     data-val="denied">
                                                                    <h5>Negeren</h5>
                                                                    <i class="fa fa-close fa-fw"></i>
                                                                </div>
                                                                <div class="action">
                                                                    <h5>OK</h5>
                                                                    <i class="fa fa-check fa-fw"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                            <div class="nav_item user">
                                <a href="#">Mijn profiel <i class="fa fa-chevron-down"></i></a>

                                <div class="dropdown">
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="/user/{{ Auth::User()->id }}/profile" class="dropdown_profile">
                                                <div id="user_pic">
                                                    <img src="/img/sample_profile.png">
                                                </div>
                                                <p>
                                                    {{ Auth::User()->name }}
                                                </p>
                                            </a>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a id="managetools" href="/user/{{ Auth::User()->id }}/profile">
                                                <strong>Uw tools</strong>

                                                <div class="amount tool_amount">1</div>
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
                                <a href="/auth/login">Login</a>
                            </div>
                        @endif
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
<script src="/js/script.js" type=text/javascript></script>

</html>