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
                    <div id="showlogin">Login</div> 
                    @endif
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
    <div id="landing_content">
        <!--<div id="landing_title">
            <h1>Add generic title here</h1>
            <p id="subtext">Hic vidisse ut ullamco, ipsum hic excepteur ut irure. Culpa non ab aliqua 
                doctrina, veniam se eu noster nescius. Ea si familiaritatem, lorem ab fabulas ad 
                vidisse dolore incididunt iis iis eram voluptatibus. Commodo dolore nulla 
                offendit illum est enim nescius comprehenderit.</p>
        </div>-->
        <div id="landing_search">
            <form>
                <div id="search_box">
                    <p>Ik zoek een</p>
                    <input placeholder="Tool">
                    <p>van</p>
                    <input placeholder="Begindatum">
                    <p>tot</p>
                    <input placeholder="Einddatum">
                    <div class="search_button">
                        <button type="submit">Zoeken</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="main_content">

</div>

@stop