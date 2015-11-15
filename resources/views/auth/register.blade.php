@extends('app')
@section('content') 
<div class="main_content">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div id="register_box" class="col-50 centered">
        <h1>Join the club!</h1>
        {!! Form::open(array('url' => '/auth/register')) !!}
            {!! Form::token() !!}

            <div>
                {!! Form::label('name', 'Naam') !!}
                {!! Form::text('name', '', ['placeholder' => 'Uw Naam...']) !!}
            </div>

            <div>
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', '', ['placeholder' => 'Uw Email...']) !!}
            </div>
            <div>
                {!! Form::label('country', 'Land') !!}
                {!! Form::text('country', '', ['placeholder' => 'Uw Naam...']) !!}
                {!! Form::label('place', 'Plaats') !!}
                {!! Form::text('place', '', ['placeholder' => 'Uw Naam...']) !!}
                {!! Form::label('code', 'Postcode') !!}
                {!! Form::text('code', '', ['placeholder' => 'Uw Naam...']) !!}
                {!! Form::label('street', 'Straatnaam') !!}
                {!! Form::text('street', '', ['placeholder' => 'Uw Naam...']) !!}
                {!! Form::label('number', 'Huisnummer') !!}
                {!! Form::text('number', '', ['placeholder' => 'Nummer']) !!}
                {!! Form::label('post', 'Bus') !!}
                {!! Form::text('post', '', ['placeholder' => 'Bus']) !!}
            </div>

            <div>
                {!! Form::label('password', 'Wachtwoord') !!}
                {!! Form::password('password') !!}
            </div>

            <div>
                {!! Form::label('password_confirmation', 'Wachtwoord Bevestigen') !!}
                {!! Form::password('password_confirmation') !!}
            </div>

            <div>
                {!! Form::submit('Click Me!') !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop