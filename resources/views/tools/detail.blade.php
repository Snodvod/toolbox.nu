@extends('app')
@section('content')
    <div class="main_content">
        <div class="col col-80 centered detail_wrapper">
            <div class="col col-65">
                <div class="detail_pictures">
                    <div id="picture_carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="/img/landing.jpeg">
                            </div>
                            <div class="item">
                                <img src="/img/landing.jpeg">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                           data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                           data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-35 detail_information">
                <div>
                    <div class="detail_user">
                        <div>
                            <img src="/img/sample_profile.jpg">
                            <h4>{{$tool->user->name}}</h4>
                        </div>
                        <div>
                            <a href="/profile" class="button">Bekijk profiel</a>
                        </div>
                    </div>
                    <div class="detail_content">
                        <h3>{{$tool->name}}</h3>

                        <div class="rating">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </div>
                        <div class="detail_desc">
                            {{$tool->about}}
                        </div>
                        <div class="detail_pricing">
                            <h4 class="item_price">&euro;{{$tool->price}}</h4>
                            <div class="input-group">
                            {!! Form::open(array('url' => 'reservation/store')) !!}
                                {!! Form::hidden('user_id', Auth::User()->id) !!}
                                {!! Form::hidden('tool_id', $tool->id) !!}
                                {!! Form::label('start', 'Begindatum') !!}
                                {!! Form::text('start', 'Start', array('class' => 'datepicker')) !!}
                                Tot
                                {!! Form::label('stop', 'Einddatum') !!}
                                {!! Form::text('stop', 'Einde', array('class' => 'datepicker')) !!}
                                {!! Form::submit('Stuur Aanvraag', array('class' => 'subreservation')) !!}
                            {!! Form::close() !!}
                            </div>
<!--
                            <div class="input-group">
                                <div>
                                    <label>Begindatum</label>
                                    <input class="datepicker" placeholder="Start">
                                </div>
                                <div>
                                    Tot
                                </div>
                                <div>
                                    <label>Einddatum</label>
                                    <input class="datepicker" placeholder="Einde">
                                </div>
                            </div>
-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col centered divider">
            <div class="sub_menu">
                <ul>
                    <li class="active_tab">
                        <a href="#">
                            <p>11</p>
                            <h4>Reviews</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>12</p>
                            <h4>Tips en tricks</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>3</p>
                            <h4>Jobs</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sub_menu_tabs">
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
            <section class="sub_menu_tab" id="tab_tipsentricks">
                Tips en tricks
            </section>
            <section class="sub_menu_tab" id="tab_jobs">
                Jobs
            </section>
        </div>
    </div>
@stop