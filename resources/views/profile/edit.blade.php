@extends('app') @section('content')
    <div class="main_content">
        <div class="col col-80 centered manage_account_info">
            <div class="title">
                <h1>Account</h1>
            </div>
        </div>
        <div class="col col-80 centered manage_account">
            <div class="wrapper">
                <div class="tool_title">
                    <h3>Bewerk informatie</h3>
                </div>
                {!! Form::Open(array('url' => '/user/' . Auth::User()->id . '/account/update', 'method' => 'put')) !!}
                <div class="input-group">
                    <div class="account_label">
                        <label>Naam</label>
                    </div>
                    <div class="values">
                        {!! Form::text('name', Auth::User()->name) !!}
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Email</label>
                    </div>
                    <div class="values">
                        {!! Form::text('email', Auth::User()->email) !!}
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Straat en nummer</label>
                    </div>
                    <div class="values">
                        {!! Form::text('street', Auth::User()->address->street) !!}
                        {!! Form::text('number', Auth::User()->address->number) !!}
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Postcode</label>
                    </div>
                    <div class="values">
                        {!! Form::text('code', Auth::User()->address->code) !!}
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Plaats</label>
                    </div>
                    <div class="values">
                        {!! Form::text('place', Auth::User()->address->place) !!}
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Land</label>
                    </div>
                    <div class="values">
                        {!! Form::text('country',  Auth::User()->address->country) !!}
                    </div>
                </div>
                {!! Form::Submit('Bewaren', array('id' => 'btn-default')) !!}
                <a class="button dark" href="/user/{{ Auth::User()->id }}/account">Annuleren</a>
                {!! Form::Close() !!}
            </div>
        </div>
    </div>
@stop