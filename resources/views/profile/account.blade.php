@extends('app') @section('content')
    <div class="main_content">
        <div class="col col-80 centered" id="manage_tools_heading">
            <div class="title">
                <h1>Account</h1>
            </div>
        </div>
        <div class="col col-80 centered manage_account">
            <div class="wrapper">
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
                        <label>Wachtwoord</label>
                    </div>
                    <div class="values">
                        <p>
                            <a id="change_password" class="button" href="/password/email">Verander uw wachtwoord</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop