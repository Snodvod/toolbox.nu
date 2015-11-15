@extends('app')  @section('content')
    <div id="landing">
        <div id="landing_title">
            <h1>Build it <span>together.</span></h1>
        </div>
        <div id="landing_content">
            <div id="landing_search">
                <form>
                    <div class="col col-65 centered" id="search_box">
                        <div class="input-group">
                            <div>
                                <input placeholder="Ik zoek naar..">
                            </div>
                            <div>
                                <input class="datepicker" placeholder="Begindatum">
                            </div>
                            <div>
                                <input class="datepicker" placeholder="Einddatum">
                            </div>
                            <div class="search_button">
                                <button type="submit">Zoeken</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop