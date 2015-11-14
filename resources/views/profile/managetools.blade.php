@extends('app') @section('content')
    <div class="main_content">
        <div class="col col-80 centered" id="manage_tools_heading">
            <div class="title">
                <h1>Beheer uw tools</h1>
            </div>
        </div>
        <div class="col col-80 centered manage_tool">
            <div>
                <div class="tool_title">
                    <h3>Werkbank</h3>
                </div>
                <form methos="post">
                    <div class="input-group">

                        <div class="tool_label">
                            <label>Naam van de tool</label>
                        </div>
                        <div class="values">
                            <input value="Werkbank">
                        </div>

                    </div>
                    <div class="input-group">

                        <div class="tool_label">
                            <label>Beschrijving</label>
                        </div>
                        <div class="values">
                                        <textarea rows="8">Puréed strawberries can be made sliced by varnishing with salad cream.
                                    Puréed strawberries can be made sliced by varnishing with salad cream.
                                    Puréed strawberries can be made sliced by varnishing with salad cream.
                                    Puréed strawberries can be made sliced by varnishing with salad cream.
                                    Puréed strawberries can be made sliced by varnishing with salad cream.
                                    Puréed strawberries can be made sliced by varnishing with salad cream.</textarea>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="tool_label">
                            <label>Prijs per dag</label>
                        </div>
                        <div class="values price">
                            <input value="3"> Euro
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="tool_label">
                            <label>Afbeelding</label>
                        </div>
                        <div class="values">
                            <img src="/img/sample_profile.png">
                            <button id="choose_pic">Kies afbeelding</button>
                        </div>
                    </div>
                    <button id="btn-default" type="submit">Bewaren</button>
                    <button type="submit">Annuleren</button>
                </form>
            </div>
        </div>
    </div>
@stop