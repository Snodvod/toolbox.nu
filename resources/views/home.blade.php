@extends('app') @section('content')

<div id="landing">
    <div class="nav">
        <div class="col col-65 centered">
            <div class="col col-50">
                <div id="nav_logo">
                    <a href="/"><img src="/img/logo.svg"></a>
                </div>
                <div id="nav_main">
                    <a href="/tools">Tools</a>
                </div>
            </div>
            <div class="col col-50">
                <div id="nav_auth">
                    @if (Auth::check())
                        <a href="/auth/logout">Logout</a>
                    @else
                        <a href="/auth/register">Registreren</a>
                        <a href="/auth/login">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop