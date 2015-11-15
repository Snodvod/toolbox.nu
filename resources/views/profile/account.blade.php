@extends('app') @section('content')
    <div class="main_content">
        <div class="col col-80 centered manage_account_info">
            <div class="title">
                <h1>Account</h1>
            </div>
            <div class="link">
                <a class="button" href="/user/{{ Auth::User()->id }}/account/edit">Bewerk info</a>
            </div>
        </div>
        <div class="col col-80 centered manage_account">
            <div class="wrapper">
                <div class="tool_title">
                    <h3>Informatie</h3>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Naam</label>
                    </div>
                    <div class="values">
                        <p>
                            {{ Auth::User()->name }}
                        </p>
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Email</label>
                    </div>
                    <div class="values">
                        <p>
                            {{ Auth::User()->email }}
                        </p>
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Straat en nummer</label>
                    </div>
                    <div class="values">
                        <p>
                            {{ Auth::User()->address->street }}
                            {{ Auth::User()->address->number }}
                        </p>
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Postcode</label>
                    </div>
                    <div class="values">
                        <p>
                            {{ Auth::User()->address->code }}
                        </p>
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Plaats</label>
                    </div>
                    <div class="values">
                        <p>
                            {{ Auth::User()->address->place }}
                        </p>
                    </div>
                </div>
                <div class="input-group">
                    <div class="account_label">
                        <label>Land</label>
                    </div>
                    <div class="values">
                        <p>
                            {{ Auth::User()->address->country }}
                        </p>
                    </div>
                </div>
                <a class="button red" href="/user/{{ Auth::User()->id }}}/account/delete">Verwijder account</a>
            </div>
        </div>
    </div>
@stop