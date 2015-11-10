@extends('app') @section('navigation')

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
                    <div class="nav_item user">
                        <a href="/{{Auth::User()->name}}">{{ Auth::User()->name }}</a>
                    </div>
                    <div class="nav_item">
                        <a href="/auth/logout">Logout</a>
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
                        <div>
                            Email
                            <input type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div>
                            Password
                            <input type="password" name="password" id="password">
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="remember"> Remember Me
                        </div>

                        <div>
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="small_device">
            <div class="hamburger">
                <i class="fa fa-bars fa-2x fa-fw"></i>
            </div>
        </div>
    </div>
@stop @section('content')
    <div id="landing">
        <div id="landing_title">
            <h1>Build it <span>together.</span></h1>
        </div>
        <div id="landing_content">
            <div id="landing_search">
                <form>
                    <div class="col col-65 centered" id="search_box">
                        <div class="input-group">
                            <div>
                                <input placeholder="Ik zoek naar..">
                            </div>
                            <div>
                                <input class="datepicker" placeholder="Begindatum">
                            </div>
                            <div>
                                <input class="datepicker" placeholder="Einddatum">
                            </div>
                            <div class="search_button">
                                <button type="submit">Zoeken</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop