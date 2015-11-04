@extends('app') @section('navigation')
    <div id="nav_logo">
        <a href="/"><img src="/img/logo.svg"></a>
    </div>
    <div id="nav_main">
        <div class="nav_item">
            <a href="/tools">Tools</a>
        </div>
    </div>
    <div id="nav_auth">
        @if (Auth::check())
            <div class="nav_item">
                <a href="/auth/getLogout">Logout</a>
            </div>@else
            <div id="register" class="nav_item">
                <a href="/auth/register">Registreren</a>
            </div>
            <div class="nav_item">
                <div id="showlogin">Login</div>
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
@stop @section('content')
    <div class="main_content">
        <div class="profile">
            <div class="col col-65 centered">
                <div class="profile_header">
                    <div id="picture">
                        <img src="/img/sample_profile.jpg">
                    </div>
                    <div class="info">
                        <h1>Kristof Sweerts</h1>

                        <div class="rating">
                            <span class="profile_location">
                                <i class="fa fa-map-marker"></i>Boom
                            </span>
                            <span id="separator">//</span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </div>
                        <p>
                            Aususs sunt hippotoxotas de azureus adiurator.
                            Albus mensa mechanice magicaes plasmator est.
                            Cum vortex ridetis, omnes fortises amor flavum, clemens fermiumes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-25 centered">
                <div class="profile_action_buttons">
                    <form>
                        <button>Contacteer</button>
                        <button>Volgen</button>
                    </form>
                </div>
            </div>
            <div class="col centered" id="divider">
                <div class="profile_stats">
                    <ul>
                        <li class="active_tab">
                            <a href="#">
                                <p>5</p>
                                <h4>Tools</h4>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>11</p>
                                <h4>Reviews</h4>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>28</p>
                                <h4>Contacten</h4>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>86</p>
                                <h4>Rating</h4>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>3.6 <span>KM</span></p>
                                <h4>Afstand</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profile_tabs">
                <section class="profile_tab" id="profile_tools">
                    <div class="grid">
                        <div class="item">
                            <img src="/img/landing.jpeg">

                            <div class="item_info">
                                <div class="info_header">
                                    <h4>Schroevedraaier Set</h4>
                                    <h5 class="success">VRIJ</h5>
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <div class="item_price">
                                    <h2>&euro; 1<span>/dag</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/img/landing.jpeg">

                            <div class="item_info">
                                <div class="info_header">
                                    <h4>Werkbank</h4>
                                    <h5 class="success">VRIJ</h5>
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <div class="item_price">
                                    <h2>&euro; 3<span>/dag</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/img/landing.jpeg">

                            <div class="item_info">
                                <div class="info_header">
                                    <h4>Meetinstrument</h4>
                                    <h5 class="error">BEZET</h5>
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <div class="item_price">
                                    <h2>&euro; 1.5<span>/dag</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/img/landing.jpeg">

                            <div class="item_info">
                                <div class="info_header">
                                    <h4>Kettingzaag</h4>
                                    <h5 class="success">VRIJ</h5>
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <div class="item_price">
                                    <h2>&euro; 5<span>/dag</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/img/landing.jpeg">

                            <div class="item_info">
                                <div class="info_header">
                                    <h4>Hamer</h4>
                                    <h5 class="error">BEZET</h5>
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <div class="item_price">
                                    <h2>&euro; 0.5<span>/dag</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="profile_tab" id="profile_contacten">
                    Contacten
                </section>
                <section class="profile_tab" id="profile_reviews">
                    Reviews
                </section>
                <section class="profile_tab" id="profile_rating">
                    Rating
                </section>
                <section class="profile_tab" id="profile_afstand">
                    Afstand
                </section>
            </div>
        </div>
    </div>
@stop