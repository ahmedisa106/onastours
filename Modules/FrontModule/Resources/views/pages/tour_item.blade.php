@extends('frontmodule::layouts.master')
@section('header')
    <meta name="title" content="{{$tour['meta_title']}}">
    <meta name="description" content="{{$tour['meta_desc']}}">
    <meta name="keywords" content="{{$tour['meta_keywords']}}">
@stop

@section('content')

    <style>


        th, td {
            border: 1px solid #3fced3;
            font-weight: bolder;
        }

        table {
            text-align: center;
        }

        tr:first-child {

            background-color: #3fced3;
        }


    </style>

    <section>
        <div class="page-banner">
            <div class="container">
                <div class="page-banner__tittle">
                    <h1>{{$tour->title}}</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="tour-infomation-2">
        <h2 class="tour-item-aside-h2">Tour Item Aside</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ">
                    <aside>
                        <div class="tour-infomation__content">
                            <div class="tour-infomation__content__header">
                                <h2>{{$tour->title}}</h2>
                                <span class="trending-tour-item__group-infor__rating"></span>
                                <span>({{$tour->days+18}} reviews)</span>
                                <div class="tour-infomation__content__header__icon">

                                    <p>
                                        <img src="{{url('/')}}/public/assets/front/assets/images/tours/tour_item-icon-lasting.png"
                                             alt="">{{$tour->days}} Days / {{$tour->days-1}} Nights</p>
                                    <p>
                                        <img src="{{url('/')}}/public/assets/front/assets/images/tours/tour_item-icon-group.png"
                                             alt="">Group: Any </p>
                                    {{--<!-- <p><img src="{{url('/')}}/public/assets/front/assets/images/tours/tour_item-icon-address.png" alt="">Nepal</p> -->--}}
                                    {{--<p>--}}
                                    {{--<img src="{{url('/')}}/public/assets/front/assets/images/tours/tour_item-icon-age-range.png"--}}
                                    {{--alt="">Min Age: 11+</p>--}}

                                </div>
                            </div>
                            <!-- gallery-syncing-item -->
                            <div class="gallery-syncing-item">
                                <div class="gallery-syncing-item__single">
                                    @foreach($tour->photos as $item)
                                        <div class="gallery-syncing-item__single__item">
                                            <img style="width:740px;height:427px"
                                                 src="{{ asset('public/images/trips/' . $item->photo) }}"
                                                 alt="gall-syn1">
                                        </div>
                                    @endforeach

                                </div>
                                <div class="gallery-syncing-item__nav">
                                    @foreach($tour->photos as $item)
                                        <div class="gallery-syncing-item__nav__item">
                                            <img src="{{ asset('public/images/trips/' . $item->photo) }}"
                                                 alt="gall-syn1">
                                        </div>
                                    @endforeach


                                </div>

                            </div>
                            <!--end  gallery-syncing-item -->
                            <div class="tour-infomation__content__descript">
                                <p>
                                    {!! $tour->description !!}
                                </p>
                            </div>


                            <div class="tour-infomation__content__time-table--price">
                                <span>Price Includes</span>
                                {!! $tour->include !!}
                            </div>
                            <div class="tour-infomation__content__time-table--price">
                                <span>Price Excludes</span>
                                <ul class="tour-infomation__content__time-table__price-exclude">
                                    {!! $tour->not_include !!}
                                </ul>
                            </div>
                            <div class="tour-infomation__content__schedule">
                                <h2>Programs</h2>
                                @foreach($tour->program as $index=> $item)
                                    <div class="tour-infomation__content__schedule__day">
                                        <span>Day {{$index+1}}: {{$item->title}}</span><span
                                            class="fa fa-angle-down"></span>
                                        <p>{!! $item->description !!}</p>
                                    </div>
                                @endforeach

                            </div>


                            <div class="tour-infomation__content__descript">
                                <h2>Price Table</h2>
                                <p>

                                    {!! $tour->price_table !!}
                                </p>

                            </div>


                            <div style=" margin-top: 30px; text-align: center ;background-color: #3fced3 ;height: 40px; color: white; line-height: 40px; ">
                                <a href="{{route('front.bookingNow',$tour->id)}}" class="button btn full-width btn-large btn-primary "> <span
                                        style=" color: white; font-size: 20px; letter-spacing: 2px;">Anfrage schicken</span> </a>
                            </div>


                        </div>
                    </aside>
                </div>
                <div class="col-lg-4 ">

                    <div class="sidebar">
                        <div class="right-sidebar">
                            <div class="right-sidebar__item">

                            </div>
                            <div class="right-sidebar__item ">
                                <div class="right-sidebar__item__contact">
                                    <h5>Get a Question?</h5>
                                    <p>Do not hesitate to give us a call. We are an expert team and we happy to talk to
                                        you.</p>
                                    <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/sidebar/phone.png" alt="phone"><span class="contact-phone">{{$config['phone'] }}</span></a>
                                    <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/sidebar/mail.png" alt="mail"><span>{{  $config['email'] }} </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="similar-tour__tittle">


                <div class="section-tittle">
                    <h2>discover</h2>
                    <div class="section-tittle__line-under"></div>
                    <p>Similar <span>Tours</span></p>
                </div>
            </div>
        </div>

        <div class="similar-tour">
            <div class="container">
                <div class="row">
                    @foreach($trips->take(6) as $trip)

                        <div class="col-lg-4 col-md-6 col-xl-4 col-sm-6 col-12">
                            <a href="{{route('front.tourItem',$trip->slug)}}" class="trending-tour-item">

                                <img class="trending-tour-item__thumnail"
                                     src="{{asset('public/images/trip/' . $trip->photo)}}" alt="tour1">
                                <div class="trending-tour-item__info">
                                    <h3 class="trending-tour-item__name">
                                        {{$trip->title}}
                                    </h3>
                                    <div class="trending-tour-item__group-infor">
                                        <div class="trending-tour-item__group-infor--left">
                                            <span class="trending-tour-item__group-infor__rating"></span>
                                            <div class="trending-tour-item__group-infor__lasting"><img
                                                    src="{{url('/')}}/public/assets/front/assets/images/tours/lasting.png"
                                                    alt="lasting"> {{$trip->days}} Days / {{$trip->days-1}} Nights
                                            </div>
                                        </div>


                                        <span class="trending-tour-item__group-infor__price">${{$trip->price}}</span>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </section>
@stop
