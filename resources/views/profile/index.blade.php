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
            <div class="nav_item notifications">
                <a href="#notificaties"><i class="fa fa-bell fa-fw"></i></a>

                <div class="notifications_amount">3</div>

                <div class="notifications_dropdown">
                    <ul class="dropdown-menu">
                        <li><a href="#">Notification</a></li>
                        <li><a href="#">Notification</a></li>
                        <li><a href="#">Notification</a></li>
                    </ul>
                    <div class="arrow"></div>
                </div>
            </div>
            <div class="nav_item user">
                <a href="/profile">{{ Auth::User()->name }}</a>
            </div>
            <div class="nav_item">
                <a href="/auth/logout">Uitloggen</a>
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
@stop @section('content')
    <div class="main_content">
        <div class="profile">
            <div class="col col-65 centered">
                <div class="profile_header">
                    <div id="picture">
                        <img src="/img/sample_profile.jpg">
                    </div>
                    <div class="info">
                        <h1>{{$user->name}}</h1>

                        <div class="rating">
                            <span class="profile_location">
                                <i class="fa fa-map-marker"></i>Boom (<span>3.6 km</span>)
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
            <div class="col centered divider">
                <div class="sub_menu">
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
                    </ul>
                </div>
            </div>
            <div class="sub_menu_tabs">
                <section class="sub_menu_tab" id="tab_tools">
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
                </section>
                <section class="sub_menu_tab" id="tab_reviews">
                    <div class="col col-35 centered">
                        <ul class="messages">
                            <li>
                                <div class="message">
                                    <div class="message_header">
                                        <div class="message_author">
                                            <div class="author_pic">
                                                <img src="/img/sample_profile.jpg">
                                            </div>
                                            <div class="author_info">
                                                <div class="info_top">
                                                    <h3>Kristof Sweerts</h3>

                                                    <div class="rating">
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </div>
                                                </div>
                                                <p class="message_date">11/11/'11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message_content">
                                        <p>
                                            Everyone loves the sweetness of pumpkin seeds paste decorated with ground
                                            rum.
                                            Everyone loves the sweetness of pumpkin seeds paste decorated with ground
                                            rum.
                                            Everyone loves the sweetness of pumpkin seeds paste decorated with ground
                                            rum.
                                            Everyone loves the sweetness of pumpkin seeds paste decorated with ground
                                            rum.
                                            Everyone loves the sweetness of pumpkin seeds paste decorated with ground
                                            rum.
                                            Everyone loves the sweetness of pumpkin seeds paste decorated with ground
                                            rum.
                                            Everyone loves the sweetness of pumpkin seeds paste decorated with ground
                                            rum.
                                        </p>
                                    </div>
                                    <div class="message_actions">
                                        <div class="message_likes">
                                            <i class="fa fa-heart fa-2x fa-fw"></i>
                                            <h5>10</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="sub_menu_tab" id="tab_contacten">
                    <div class="col col-80 centered">
                        <div class="contact_grid">
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.jpg">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.jpg">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.jpg">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.jpg">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.jpg">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.jpg">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.jpg">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.jpg">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sub_menu_tab" id="tab_rating">
                    Rating
                </section>
            </div>
        </div>
    </div>
@stop