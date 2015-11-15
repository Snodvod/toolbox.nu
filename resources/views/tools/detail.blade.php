@extends('app')
@section('content')
    <div class="main_content">
        <div class="col col-80 centered detail_wrapper">
            <div class="col col-65">
                <div class="detail_pictures">
                    @if(!$tool->image)
                        <img src="/img/sample_tool.png">
                    @else
                        <img src="/img/catalog/{{ $tool->image }}">
                    @endif
                </div>
            </div>
            <div class="col-35 detail_information">
                <div>
                    <div class="detail_user">
                        @if(!Auth::Check() || $tool->user->id != Auth::User()->id)
                            <div>
                                <img src="/img/sample_profile.png">
                                <h4>{{$tool->user->name}}</h4>
                            </div>
                            <div>
                                <a href="/user/{{ $tool->user->id }}/profile" class="button">Bekijk profiel</a>
                            </div>
                        @else
                            <div>
                                <img src="/img/sample_profile.png">
                                <h4>Dit is uw tool</h4>
                            </div>
                            <div>
                                <a href="/tools/{{ $tool->id }}/edit" class="button">Bewerk tool</a>
                            </div>
                        @endif
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
                            <h4 data-price="{{$tool->price}}" class="item_price">&euro; {{$tool->price}}</h4>

                            {!! Form::open(array('url' => 'reservation/store')) !!}
                            <div class="input-group">
                                <div>

                                    {!! Form::hidden('tool_id', $tool->id) !!}
                                    {!! Form::label('start', 'Begindatum') !!}
                                    {!! Form::text('start', 'Start', array('class' => 'datepicker')) !!}
                                </div>
                                <span>Tot</span>
                                <div>
                                    {!! Form::label('stop', 'Einddatum') !!}
                                    {!! Form::text('stop', 'Einde', array('class' => 'datepicker')) !!}
                                </div>
                                {!! Form::submit('Stuur Aanvraag', array('class' => 'button')) !!}
                            </div>
                            {!! Form::close() !!}
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
            <section class="sub_menu_tab" id="tab_tipsentricks">
                Tips en tricks
            </section>
            <section class="sub_menu_tab" id="tab_jobs">
                Jobs
            </section>
        </div>
    </div>
@stop