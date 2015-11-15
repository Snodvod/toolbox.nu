@extends('app') @section('content')
    <div class="main_content">
        <div class="col col-80 centered" id="manage_tools_heading">
            <div class="title">
                <h1>Beheer uw tools</h1>
            </div>
        </div>
        <div class="col col-80 centered manage_tool">
            <div class="wrapper">
                <div class="tool_title">
                    <h3>Nieuwe tool</h3>
                </div>
                {!! Form::Open(array('url' => '/tools/create', 'method' => 'post', 'files' => 'true')) !!}
                <div class="input-group">

                    <div class="tool_label">
                        {!! Form::label('name', 'Naam van de tool') !!}
                    </div>
                    <div class="values">
                        {!! Form::text('name') !!}
                    </div>

                </div>
                <div class="input-group">

                    <div class="tool_label">
                        {!! Form::label('desc', 'Beschrijving') !!}
                    </div>
                    <div class="values">
                        {!! Form::textarea('desc') !!}
                    </div>
                </div>

                <div class="input-group">
                    <div class="tool_label">
                        {!! Form::label('price', 'Prijs per dag') !!}
                    </div>
                    <div class="values price">
                        {!! Form::number('price', '0', array('min' => '0')) !!} Euro
                    </div>
                </div>
                <div class="input-group">
                    <div class="tool_label">
                        <label>Afbeelding</label>
                    </div>
                    <div class="values" id="image_upload">
                        {!! Form::file('image') !!}
                    </div>
                </div>
                {!! Form::Submit('Bewaren', array('id' => 'btn-default')) !!}
                <a class="button dark" href="/user/{{ Auth::User()->id }}/profile">Annuleren</a>
                {!! Form::Close() !!}
            </div>
        </div>
    </div>
@stop