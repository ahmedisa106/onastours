@extends('frontmodule::layouts.master')

@section('header')
    <meta name="title" content="{{$config['meta_title']}}">
    <meta name="description" content="{{$config['meta_desc']}}">
    <meta name="keywords" content="{{$config['meta_keywords']}}">
@stop
@section('content')


    <section>
        <div class="page-banner">
            <div class="container">
                <div class="page-banner__tittle">
                    <h1>{{$page->title}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutus-descript">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>{{ $page->title }}</h3>
                </div>
            </div>
            <p>{!! $page->content !!}</p>

            @if($page->title == 'Rückrufservice')
                <section class="container clearfix common-pad-inner booknow">

                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="book-left-content input_form">
                                <form id="contactBooking" action="{{route('front.sendContactEmail')}}" method="post">

                                    @csrf

                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                            <label>Name</label>
                                            <div>
                                                <input type="text" name="name" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                            <label>Email</label>
                                            <div>
                                                <input type="text" name="email" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                            <label>Telefon-Nr. für Rückfragen: </label>
                                            <div>
                                                <input type="text" name="phone" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                            <label>Wunschzeit </label>
                                            <div>
                                                <input type="text" name="" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                            <label>Sonestiges: </label>
                                            <div>
                                                <input type="text" name="message" autocomplete="off">
                                            </div>
                                        </div>


                                    </div>


                                    <br>

                                    <div class="col-lg-5">

                                        <label for="" style="background-color: #70CBF4; font-size: 25px; text-align: center; color: white">{{$index = getName('4')}}</label>

                                        <input type="text" name="captcha" placeholder="Bitt den Code eingeben" class="form-control">
                                        <input type="hidden" name="valid_captcha" value="{{$index}}">

                                    </div>

                                    <hr style="background-color: #70CBF4">

                                    <input type="submit" class="form-control col-lg-6 col-md-6" style="background-color: #70CBF4 ; color: white ;font-size: 25px;" value="Anfrag schicken">

                                </form>
                            </div>
                        </div>
                        {{--            <div class="col-sm-4 pull-right">--}}
                        {{--                <div class="right-sidebar__item__contact">--}}
                        {{--                    <h5>Get a Question?</h5>--}}
                        {{--                    <p>Do not hesitate to give us a call. We are an expert team and we happy to talk to you.</p>--}}
                        {{--                    <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/sidebar/phone.png" alt="phone"><span class="contact-phone">{{$config['phone']}} </span></a>--}}
                        {{--                    <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/sidebar/mail.png" alt="mail"><span>{{$config['email']}} </span></a>--}}
                        {{--                </div>--}}
                        {{--            </div>--}}
                    </div>
                </section>
            @endif

        </div>
    </section>
@stop
