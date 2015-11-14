@extends('app') @section('navigation')
    <div id="nav_logo">
        <a href="/"><img src="/img/logo.svg"></a>
    </div>
    <div class="nav_links">
        <div class="standard_device">
            <div id="nav_main">
                <div class="active nav_item">
                    <a href="/tools">Tools</a>
                </div>
            </div>
            <div id="nav_auth">
                @if (Auth::check())
                    <div class="nav_item user">
                        <a href="/profile">{{ Auth::User()->name }}</a>
                    </div>
                    <div class="nav_item">
                        <a href="/auth/logout">Logout</a>
                    </div>@else
                    <div id="register" class="nav_item">
                        <a href="/auth/register">Registreren</a>
                    </div>
                    <div class="nav_item" id="showlogin">
                        <a href="#">Login</a>
                    </div>@endif
                <div id="login_box">
                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}
                        <div>
                            Email
                            <input type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div>
                            Password
                            <input type="password" name="password" id="password">
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="remember"> Remember Me
                        </div>

                        <div>
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="small_device">
            <div class="hamburger">
                <i class="fa fa-bars fa-2x fa-fw"></i>
            </div>
        </div>
    </div>
@stop
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
                        <option value="afstand">Afstand</option>
                        <option value="prijs">Prijs</option>
                    </select>
                </div>
                <div class="grid_filter">
                    <button>Filter</button>
                </div>
            </div>
        </div>
        <div class="col col-80 centered" id="tools">
            <div class="tool_options">
                <!--<form class="search">
                    <input type="search" placeholder="Wat hebt u nodig?">
                    <button type="submit">Zoek</button>
                </form>-->
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
                <div class="item">
                    <a href="#" class="overlay"></a>
                    <img src="/img/landing.jpeg">

                    <div class="item_info">
                        <div class="info_header">
                            <h4>Schroevedraaier Set</h4>
                            <h4 class="item_price">&euro; 1</h4>
                        </div>
                        <div class="item_author">
                            <img src="/img/sample_profile.jpg">
                            <h4>Kristof Sweerts</h4>
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
                <div class="item">
                    <a href="tools/detail/werkbank" class="overlay"></a>
                    <img src="/img/landing.jpeg">

                    <div class="item_info">
                        <div class="info_header">
                            <h4>Werkbank</h4>
                            <h4 class="item_price">&euro; 3</h4>
                        </div>
                        <div class="item_author">
                            <img src="/img/sample_profile.jpg">
                            <h4>Kristof Sweerts</h4>
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
                <div class="item">
                    <a href="#" class="overlay"></a>
                    <img src="/img/landing.jpeg">

                    <div class="not_available">
                        <span>BEZET</span>
                    </div>

                    <div class="item_info">
                        <div class="info_header">
                            <h4>Meetinstrument</h4>
                            <h4 class="item_price">&euro; 1.5</h4>
                        </div>
                        <div class="item_author">
                            <img src="/img/sample_profile.jpg">
                            <h4>Kristof Sweerts</h4>
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
                <div class="item">
                    <a href="#" class="overlay"></a>
                    <img src="/img/landing.jpeg">

                    <div class="item_info">
                        <div class="info_header">
                            <h4>Kettingzaag</h4>
                            <h4 class="item_price">&euro; 5</h4>
                        </div>
                        <div class="item_author">
                            <img src="/img/sample_profile.jpg">
                            <h4>Kristof Sweerts</h4>
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
                <div class="item">
                    <a href="#" class="overlay"></a>
                    <img src="/img/landing.jpeg">

                    <div class="item_info">
                        <div class="info_header">
                            <h4>Hamer</h4>
                            <h4 class="item_price">&euro; 0.5</h4>
                        </div>
                        <div class="item_author">
                            <img src="/img/sample_profile.jpg">
                            <h4>Kristof Sweerts</h4>
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
            </div>
        </div>
    </div>
@stop