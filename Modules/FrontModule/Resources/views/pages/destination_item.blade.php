@extends('frontmodule::layouts.master')

@section('header')

    @foreach($destination->trips as $trip )
        <meta name="title" content="{{$trip['meta_title']}}">
        <meta name="description" content="{{$trip['meta_desc']}}">
        <meta name="keywords" content="{{$trip['meta_keywords']}}">
    @endforeach

@stop
@section('content')


    <section>
        <div class="destination-item-banner">
            <div class="container">
                <div class="destination-item-banner__tittle">
                    <h1>{{$destination->title}}</h1>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="container">
            <div class="col-4-tour__tittle" style="margin: 50px auto">
                <!-- section tittle -->

                <div class="section-tittle">
                    <h2>{{$destination->title}}</h2>
                    <div class="section-tittle__line-under"></div>
                    <p><span>{{$destination->title}}</span></p> <br>


                </div>
                <span class="col-4-tour__sub-tittle"> {{strip_tags($destination->description)}}</span>


            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12">
                    <aside class="destination-item-aside">


                        <div class="related-tour">

                            @foreach($destination->trips as $trip)
                                <div class="related-tour__item">
                                    <a href="{{route('front.tourItem',$trip->slug)}}" class="trending-tour-item">

                                        <img class="trending-tour-item__thumnail" src="{{asset('public/images/trip/' . $trip->photo)}}" alt="tajmaha">
                                        <div class="trending-tour-item__info">
                                            <h3 class="trending-tour-item__name">
                                                {{$trip->title}}
                                            </h3>
                                            <div class="trending-tour-item__group-infor">
                                                <div class="trending-tour-item__group-infor--left">
                                                    <span class="trending-tour-item__group-infor__rating--4star"></span>
                                                    <div class="trending-tour-item__group-infor__lasting"><img src="{{url('/')}}/public/assets/front/assets/images/tours/lasting.png" alt="lasting">{{$trip->days}} Days / {{$trip->days-1}} Nights</div>
                                                </div>

                                                <span class="trending-tour-item__group-infor__price">${{$trip->price}}</span>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach


                        </div>


                    </aside>
                </div>

            </div>
        </div>
    </section>


@stop
