@extends('app') @section('content')
    <div id="landing">
        <div class="login">
            <h1>Inloggen</h1>

            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="input-group">
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="input-group">
                    <div>
                        <label>Wachtwoord</label>
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <div><a href="/password/email" class="btn btn-danger">Wachtwoord vergeten? Onvoorstelbaar maar ja...</a></div> 


                <button type="submit">Login</button>

            </form>
        </div>
    </div>

@stop