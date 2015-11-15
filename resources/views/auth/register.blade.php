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
        <div id="register_box" class="col-80 centered">
            <h1>Join the club!</h1>
            {!! Form::open(array('url' => '/auth/register')) !!}
            {!! Form::token() !!}
            <div class="input-group">
                <div>
                    {!! Form::label('name', 'Naam') !!}
                    {!! Form::text('name', '') !!}
                </div>
            </div>
            <div class="input-group">
                <div>
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', '') !!}
                </div>
            </div>
            <div class="input-group">
                <div>
                    {!! Form::label('country', 'Land') !!}
                    {!! Form::text('country', '') !!}
                </div>
            </div>
            <div class="input-group">
                <div>
                    {!! Form::label('street', 'Straatnaam') !!}
                    {!! Form::text('street', '') !!}
                </div>
                <div>
                    {!! Form::label('number', 'Huisnummer') !!}
                    {!! Form::text('number', '') !!}
                </div>
                <div>
                    {!! Form::label('post', 'Bus') !!}
                    {!! Form::text('post', '') !!}
                </div>
            </div>
            <div class="input-group">
                <div>
                    {!! Form::label('code', 'Postcode') !!}
                    {!! Form::text('code', '') !!}
                </div>
                <div>
                    {!! Form::label('place', 'Plaats') !!}
                    {!! Form::text('place', '') !!}
                </div>
            </div>
            <div class="input-group">
                <div>
                    {!! Form::label('password', 'Wachtwoord') !!}
                    {!! Form::password('password') !!}
                </div>
                <div>
                    {!! Form::label('password_confirmation', 'Wachtwoord Bevestigen') !!}
                    {!! Form::password('password_confirmation') !!}
                </div>
            </div>

            <div>
                {!! Form::submit('Registreren', array('class' => 'button')) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('scripts')
    <script src="/js/locations.js" type="text/javascript"></script>
@stop