@extends('app') @section('content')
    <div class="main_content">
        <div class="col col-80 centered manage_reservation">
            <div class="title">
                <h1>Reservaties voor uw tools</h1>
            </div>
            <div class="link">
                <a class="button" href="/user/{{ Auth::User()->id }}/reservations">Uw reservaties</a>
            </div>
        </div>
        <div class="col col-80 centered">
            <div class="grid">
                @if($reservations->count() != '0')
                    @foreach($reservations as $reservation)
                        <div class="item">
                            <a href="/tools/{{$reservation->tool->id}}/detail" class="overlay"></a>
                            @if(!$reservation->tool->image)
                                <img src="/img/sample_tool.png">
                            @else
                                <img src="/img/catalog/{{ $reservation->tool->image }}">
                            @endif
                            <div class="reservation_date">
                                {{ date('d/m/Y', strtotime($reservation->start)) }}
                            </div>
                            <div class="item_author">
                                <img src="/img/sample_profile.png">
                                <h4>{{$reservation->user->name}}</h4>
                            </div>
                            <div class="item_info">
                                <div class="info_header">
                                    <h4>{{$reservation->tool->name}}</h4>
                                    <h4 class="item_price">&euro; {{$reservation->tool->price}}</h4>
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
                @else
                    <h4>Niemand wil u lelijke tools!</h4>
                @endif
            </div>
        </div>
    </div>
@stop