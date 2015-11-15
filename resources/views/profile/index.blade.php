@extends('app') @section('content')
    <div class="main_content">
        <div class="profile">
            <div class="col col-65 centered">
                <div class="profile_header">
                    <div id="picture">
                        <img src="/img/sample_profile.png">
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
                        <a class="btn btn-default" href="/user/{{$user->id}}/profile/contact">Contacteer</a>
                        <button>Volgen</button>
                    </form>
                </div>
            </div>
            <div class="col centered divider">
                <div class="sub_menu">
                    <ul>
                        <li class="active_tab">
                            <a href="#">
                                <p>{{count($user->tools)}}</p>
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
                            @foreach($user->tools as $tool)
                                <div class="item">
                                    <a href="/tools/{{$tool->id}}/detail" class="overlay"></a>
                                    <!--<img src="/img/tools/{{$tool->image}}">-->
                                    <img src="/img/sample_tool.png">

                                    <div class="item_info">
                                        <div class="info_header">
                                            <h4>{{$tool->name}}</h4>
                                            <h4 class="item_price">&euro; {{$tool->price}}</h4>
                                        </div>
                                        <div class="rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="item_edit">
                                        <a href="/tools/{{ $tool->id }}/edit">
                                            <p>Bewerken</p>
                                            <i class="fa fa-edit fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
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
                                                <img src="/img/sample_profile.png">
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
                                        <img src="/img/sample_profile.png">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.png">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.png">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.png">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.png">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.png">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.png">
                                    </div>
                                    <div class="contact_name">
                                        <h4>Kristof Sweerts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item">
                                <div class="contact">
                                    <div class="contact_pic">
                                        <img src="/img/sample_profile.png">
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