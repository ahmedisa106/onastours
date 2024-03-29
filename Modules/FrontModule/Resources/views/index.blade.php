@extends('frontmodule::layouts.master')
@section('header')
    <meta name="title" content="{{$config['meta_title']}}">
    <meta name="description" content="{{$config['meta_desc']}}">
    <meta name="keywords" content="{{$config['meta_keywords']}}">
@stop

@section('content')


    <section>
        <h2 class="galery-h2">galerry</h2>
        <div class="gallery">
            @if($sliders->count()>0)
                @foreach($sliders as $item)
                    <img src="{{asset('public/images/sliders/' . $item->photo)}}" height='750px' alt="gall1">

                @endforeach

            @else
                <img src="{{asset('public/default/sliders/default.jpg')}}" height='750px' alt="gall1">

        @endif


        <!-- dfdfdfdfd-->
        </div>
        <div class="gallery-control">
            <div class="gallery-control__left">
                <div class="gallery-control__arrow">
                    <span class="leftArrow"><i class='fa fa-angle-left'></i></span>
                    <span class="rightArrow"><i class='fa fa-angle-right'></i></span>
                </div>
            </div>
        </div>
    </section>

    <section class="destination-3">
        <div class="container">
            <div class="destination-3__figure">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <a href="" class="destination-3__figure-item">
                            <img src="{{url('/')}}/public/assets/front/assets/images/uploads/destination/icon7.png"
                                 alt="icon7">
                            <h5>Professionelle Reiseleiter</h5>
                            <p>Qualifizierte zufelässige kompetenten deutschsprachige Reiseleiter werden Ihnen Kultur, Geschichte, Land und Leute Ägyptens näherbringen.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="" class="destination-3__figure-item">
                            <img src="{{url('/')}}/public/assets/front/assets/images/uploads/destination/icon8.png"
                                 alt="icon7">
                            <h5>Individueller Reiseservice</h5>
                            <p> Sie haben einen besonderen Reisewünsch? Wir stellen Ihnen nach Wunsch Ihre Traumreise zusammen.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a href="" class="destination-3__figure-item">
                            <img src="{{url('/')}}/public/assets/front/assets/images/uploads/destination/icon9.png"
                                 alt="icon7">
                            <h5>Qualitätsgarantie</h5>
                            <p>Qualität steht bei uns an oberster Stelle. Zufriedenheit unserer Kunden ist immer unser Ziel</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="destination-5">
        <div class="container">
            <div class="destination-5__tittle">
                <!-- section tittle -->
                <div class="section-tittle">
                    <h2>discover now</h2>
                    <div class="section-tittle__line-under"></div>
                    <p> Top<span> Zielort</span></p>
                </div>
            </div>
            <div class="row">
                @foreach($destinations as $index=> $distination)
                    <div class="col-lg-3 col-sm-6">

                        <a href="{{ url('destination/') }}/{{ $distination->slug }}" class="destination-5__item">

                            @if($index %2 !=0)
                                <span class="destination-5__item__upper-tittle">{{$distination->title}}</span>

                                @if($distination->photo !=null)
                                    <img src="{{asset('public/images/destination/' . $distination->photo)}}" alt="desti51">
                                @else
                                    <img src="{{asset('public/default/destination/default.jpg')}}" alt="desti51">


                                @endif
                            @else
                                <img src="{{asset('public/images/destination/' . $distination->photo)}}" alt="desti51">
                                <span class="destination-5__item__below-tittle">{{$distination->title}}</span>
                            @endif

                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="question_sec pt-90 pt-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="email_gardener text-center">
                        <div class="section_tit light-color">
                            <h2>Reisebaukasten</h2>
                            <span class="three_line"></span>
                        </div>
                        <div class="text_heading mb-30 light-color">
                            <p>
                                Lorem ipsum dolor sit amet, ligula vestibulum nunc dis ipsum, et nam, cras nec lacus
                                amet, ut mauris erat mattis neque a quis. Vivamus donec dolor consectetuer congue.
                            </p>
                        </div>
                        <a href="{{route('front.booking')}}" class="btn-book">Mehr <span class="fa fa-send"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="col-4-tour mb-2">
        <div class="container">
            <div class="col-4-tour__tittle">
                <!-- section tittle -->

                <div class="section-tittle">
                    <h2>Populär Reisen</h2>
                    <div class="section-tittle__line-under"></div>
                    <p>Populär <span>Reisen</span></p>
                </div>

            </div>
            <div class="row">

                @foreach($trips as $trip)
                    <div class="col-lg-3 col-md-6 col-xl-4 col-sm-6 col-12">
                        <a href="{{ url('tour') }}/{{ $trip->slug  }}" class="trending-tour-item">

                            @if($trip->photo !=null)
                                <img class="trending-tour-item__thumnail"
                                     src="{{asset('public/images/trip/' . $trip->photo)}}">
                            @else
                                <img class="trending-tour-item__thumnail"
                                     src="{{asset('public/default/trips/default.jpg')}}">
                            @endif


                            <div class="trending-tour-item__info">
                                <h3 class="trending-tour-item__name">
                                    {{$trip->title}}
                                </h3>
                                <div class="trending-tour-item__group-infor">
                                    <div class="trending-tour-item__group-infor--left">
                                        <span class="trending-tour-item__group-infor__rating"></span>
                                        <div class="trending-tour-item__group-infor__lasting"><img
                                                src="{{url('/')}}/public/assets/front/assets/images/tours/lasting.png"
                                                alt="lasting">{{$trip->days}} Days / {{$trip->days-1}} Nights
                                        </div>
                                    </div>


                                    <span class="trending-tour-item__group-infor__price">{{$trip->price}}</span>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
@stop
