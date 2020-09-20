@extends('frontmodule::layouts.master')

@section('header')

    @foreach($categoryTours->trips as $cat)
        <meta name="title" content="{{$cat['meta_title']}}">
        <meta name="description" content="{{$cat['meta_desc']}}">
        <meta name="keywords" content="{{$cat['meta_keywords']}}">

    @endforeach
@stop
@section('content')

    <section>
        <div class="page-banner"
             style="background-image: url({{ asset( 'public/images/trip_category/'. $categoryTours->cover_photo) }});background-size: cover;">
            <div class="container">
                <div class="page-banner__tittle">
                    <h1>{{$categoryTours->title}}</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="grid-left-sidebar">
        <div class="container">
            <div class="row">

                <div class="col-4-tour__tittle" style="margin: 50px auto">
                    <!-- section tittle -->

                    <div class="section-tittle">
                        <h2>{{$categoryTours->title}}</h2>
                        <div class="section-tittle__line-under"></div>
                        <p><span>{{$categoryTours->title}}</span></p> <br>


                    </div>
                    <span class="col-4-tour__sub-tittle">{!! $categoryTours->description !!}</span>


                </div>

                <div class="row">

                    @foreach($categoryTours->trips as $trip)
                        <div class="col-lg-12 col-xl-4 col-sm-6 col-md-12">
                            <a href="{{route('front.tourItem',$trip->slug)}}" class="trending-tour-item">

                                <img class="trending-tour-item__thumnail" src="{{asset('public/images/trip/' . $trip->photo)}}" alt="{{$trip->title}}">
                                <div class="trending-tour-item__info">
                                    <h3 class="trending-tour-item__name">
                                        {{$trip->title}}
                                    </h3>

                                    <div class="trending-tour-item__group-infor">
                                        <div class="trending-tour-item__group-infor--left">
                                            {{--<span class="trending-tour-item__group-infor__rating"></span>--}}

                                            <div class="trending-tour-item__group-infor__lasting">
                                                <img src="{{url('/')}}/public/assets/front/assets/images/tours/lasting.png" alt="">5 Days / 4 Nights
                                            </div>


                                        </div>

                                        <span class="trending-tour-item__group-infor__price">${{$trip->price}}</span>

                                        <p> {!! $trip->short_desc !!}</p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div>


                <!-- <div class="wander-pagination__pagination">
                <div class="wander-pagination__pagination__paging current">1</div>
                <div class="wander-pagination__pagination__paging">2</div>
                <div class="wander-pagination__pagination__paging">3</div>
                <div class="wander-pagination__pagination__paging"><i class="fa fa-angle-right"></i></div> -->
            </div>

        </div>


        </div>
        </div>
    </section>


@stop
