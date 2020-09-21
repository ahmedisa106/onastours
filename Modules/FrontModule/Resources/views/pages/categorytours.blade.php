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
            @if($categoryTours->child->count()>0)
                <div class="col-4-tour__tittle" style="margin: 50px auto">
                    <!-- section tittle -->

                    <div class="section-tittle">
                        <h2>child Category</h2>
                        <div class="section-tittle__line-under"></div>
                        <p><span>{{$categoryTours->title}}</span></p> <br>


                    </div>
                    <span class="col-4-tour__sub-tittle">{{strip_tags($categoryTours->description)}}</span>


                </div>

                <div class="row">

                    @foreach($categoryTours->child as $item)
                        <div class="col-lg-12 col-xl-4 col-sm-6 col-md-12">
                            <a href="{{ url('category') }}/{{ $item->slug }}" class="trending-tour-item">

                                @if($item->photo != null)
                                    <img class="trending-tour-item__thumnail" src="{{asset('public/images/trip_category/' . $item->photo)}}" alt="{{$item->title}}">

                                @else
                                    <img class="trending-tour-item__thumnail" src="{{asset('public/default/trips/default.jpg')}}" alt="{{$item->title}}">

                                @endif

                                <div class="trending-tour-item__info">
                                    <h3 class="trending-tour-item__name">
                                        {{$item->title}}
                                    </h3>

                                    <div class="trending-tour-item__group-infor">
                                        <div class="trending-tour-item__group-infor--left">
                                            {{--<span class="trending-tour-item__group-infor__rating"></span>--}}


                                        </div>


                                        <p> {!! $item->description !!}</p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div>
            @endif

            @if($categoryTours->trips->count()>0)
                <div class="col-4-tour__tittle" style="margin: 50px auto">
                    <!-- section tittle -->

                    <div class="section-tittle">
                        <h2>trips</h2>
                        <div class="section-tittle__line-under"></div>
                        <p><span>trips</span></p> <br>


                    </div>


                </div>

                <div class="row">

                    @foreach($categoryTours->trips as $trip)
                        <div class="col-lg-12 col-xl-4 col-sm-6 col-md-12">
                            <a href="{{route('front.tourItem',$trip->slug)}}" class="trending-tour-item">
                                @if($trip->photo != null)
                                    <img class="trending-tour-item__thumnail" src="{{asset('public/images/trip/' . $trip->photo)}}" alt="{{$trip->title}}">

                                @else
                                    <img class="trending-tour-item__thumnail" src="{{asset('public/default/trips/default.jpg')}}" alt="{{$trip->title}}">

                                @endif


                                <div class="trending-tour-item__info">
                                    <h3 class="trending-tour-item__name">
                                        {{$trip->title}}
                                    </h3>

                                    <div class="trending-tour-item__group-infor">
                                        <div class="trending-tour-item__group-infor--left">
                                            {{--<span class="trending-tour-item__group-infor__rating"></span>--}}

                                            <div class="trending-tour-item__group-infor__lasting">
                                                <img src="{{url('/')}}/public/assets/front/assets/images/tours/lasting.png" alt=""> {{$trip->days}} Days / {{$trip->days-1}} Nights
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
            @endif


        </div>

    </section>


@stop
