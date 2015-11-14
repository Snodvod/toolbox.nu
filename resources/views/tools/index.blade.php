@extends('app')
@section('content')
    <div class="main_content">
        <div class="col col-80 centered" id="tools_heading">
            <div class="title">
                <h1><span>Werkbank</span></h1>
            </div>
            <div class="grid_options">
                <div class="grid_view">
                    <h4>Bedrag per</h4>
                    <ul>
                        <li class="active">Dag</li>
                        <li>Week</li>
                        <li>Maand</li>
                    </ul>
                </div>
                <div class="grid_sort">
                    <h4>Sorteer op</h4>
                    <select>
                        <option value="name">Naam</option>
                        <option value="price">Prijs</option>
                        <option value="afstand" disabled>Afstand</option>
                    </select>
                </div>
                <div class="grid_filter">
                    <button>Filter</button>
                </div>
            </div>
        </div>
        <div class="col col-80 centered" id="tools">
            <div class="tool_options">
<!--
                Moet ne link worden met die ?search=*searchvalue hier* append en uitvoerd
                <form class="search">
                    <input name="searchvalue" type="search" placeholder="Wat hebt u nodig?">
                    <button type="submit">Zoek</button>
                </form>
-->
                <div class="tool_filter">
                    <form>
                        <div class="slider_filter">
                            <div class="options">
                                <div class="option_title">
                                    <h4>Bedrag:</h4>
                                </div>
                            </div>
                            <div class="flat-slider ui-corner-all ui-slider ui-slider-horizontal ui-widget ui-widget-content"
                                 id="flat_slider_amount">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all"></a>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all"></a>
                            </div>
                            <input id="amount" readonly>
                        </div>
                        <div class="slider_filter">
                            <div class="options">
                                <div class="option_title">
                                    <h4>Max afstand:</h4>
                                </div>
                            </div>
                            <div class="flat-slider ui-corner-all ui-slider ui-slider-horizontal ui-widget ui-widget-content"
                                 id="flat_slider_distance">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all"></a>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all"></a>
                            </div>
                            <input id="distance" readonly>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col col-80 centered">
            <div class="grid">
                @foreach($tools as $tool)
                <div class="item">
                    <a href="#" class="overlay"></a>
                    <img src="/img/landing.jpeg">
                    @foreach($tool->loans as $loan)
                    @if($loan->pivot->active)
                    <div class="not_available">
                        <span>BEZET</span>
                    </div>
                    @endif
                    @endforeach
                    <div class="item_info">
                        <div class="info_header">
                            <h4>{{$tool->name}}</h4>
                            <h4 class="item_price">&euro; {{$tool->price}}</h4>
                        </div>
                        <div class="item_author">
                            <img src="/img/sample_profile.jpg">
                            <h4>{{$tool->user->name}}</h4>
                        </div>
                        <div class="rating">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop