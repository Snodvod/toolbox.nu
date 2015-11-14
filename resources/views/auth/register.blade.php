@extends('app')
@section('content') 
<div class="main_content">
    <div id="register_box" class="col-50 centered">
        <h1>Join the club!</h1>
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