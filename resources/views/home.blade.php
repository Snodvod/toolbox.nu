@extends('app')  @section('content')
    <div id="landing">
        <div id="landing_title">
            <h1>Build it <span>together.</span></h1>
        </div>
        <div id="landing_content">
            <div id="landing_search">
                <form>
                    <div class="col col-65 centered" id="search_box">
                        <div class="input-group" id="homesearchgroup">
                            <div>
                                <input id="homesearch" placeholder="Ik zoek naar..">
                            </div>
                            <div>
                                <input id="homestart" class="datepicker dateA" placeholder="Begindatum">
                            </div>
                            <div>
                                <input id="homestop" class="datepicker dateB" placeholder="Einddatum">
                            </div>
                            <div class="search_button">
                                <button>Zoeken</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop