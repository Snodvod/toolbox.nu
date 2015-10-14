@extends('app') @section('content')
<div class="main_content">
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
                    <a href="/auth/getLogout">Logout</a> @else
                    <a href="/auth/register">Registreren</a>
                    <div id="showlogin">Login</div> @endif
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
        </div>
    </div>
    <div id="register_box" class="col-50 centered">
        <h1>Registreer je hier</h1>
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}

            <div>
                <label for="name">Naam</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="adress">Adres</label>
                <input type="text" name="adress" value="{{ old('adress') }}">
            </div>

            <div>
                <label for="password">Wachtwoord</label>
                <input type="password" name="password">
            </div>

            <div>
                <label for="password_confirmation">Bevestig wachtwoord</label>
                <input type="password" name="password_confirmation">
            </div>

            <div>
                <button type="submit">Registreer</button>
            </div>
        </form>
    </div>
</div>
@stop