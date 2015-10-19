@extends('app') @section('navigation')
<div id="nav_logo">
    <a href="/"><img src="/img/logo.svg"></a>
</div>
<div id="nav_main">
    <div class="active nav_item">
        <a href="/tools">Tools</a>
    </div>
</div>
<div id="nav_auth">
    @if (Auth::check())
    <div class="nav_item">
        <a href="/auth/getLogout">Logout</a>
    </div>@else
    <div class="nav_item">
        <a href="/auth/register">Registreren</a>
    </div>
    <div class="nav_item">
        <div id="showlogin">Login</div>
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
@stop
@section('content')
<div class="main_content">
    <h1>Hello</h1>
</div>
@stop