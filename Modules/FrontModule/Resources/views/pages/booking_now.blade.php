@extends('frontmodule::layouts.master')
@section('header')
    <meta name="title" content="{{$config['meta_title']}}">
    <meta name="description" content="{{$config['meta_desc']}}">
    <meta name="keywords" content="{{$config['meta_keywords']}}">
@stop

@section('content')

    <section>
        <div class="slider-banner-2">
            <div class="slider-banner-2__item">
                <div class="wand-container">
                    <div class="slider-banner-2__item__text animated zoomInUp">
                        <span>Discover the magic of</span><span class="slider-banner-2__item__text__line"></span>
                        <h1>Mount Kilija</h1>
                        <a href="#">VIEW TOUR <img src="{{url('/')}}/public/assets/front/assets/images/slider/viewArrow.png" alt="viewtourArrow"> </a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="container clearfix common-pad-inner booknow">
        <div class="sec-header">
            <h2>Booking</h2>
            <h3>Lorem ipsum dolor sit amet, ligula vestibulum nunc</h3>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
                <div class="book-left-content input_form">
                    <form id="contactBooking" action="{{route('front.book')}}" method="post">

                        @csrf
                        <input type="hidden" name="trip_id" value="{{$tour->id}}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Anrede</label>
                                <div class="right-sidebar__item__form--date">

                                    <select class="form-control col-lg-12" name="gender" id="">
                                        <option value="0">Herr</option>
                                        <option value="1">frau</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Name</label>
                                <div>
                                    <input type="text" name="name" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Ankuftsdatum</label>
                                <div class="right-sidebar__item__form--date">
                                    <span class="far fa-calendar-alt"></span>
                                    <input name="arrival_date" type="text" data-select="datepicker"
                                           autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Abreisedatum</label>
                                <div class="right-sidebar__item__form--date">
                                    <span class="far fa-calendar-alt"></span>
                                    <input name="departure_date" type="text" data-select="datepicker"
                                           autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <label for="">Erwachsene</label>
                                        <input type="text" name="adult_number" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="">Kinder</label>
                                        <input type="text" name="kids_number" class="form-control">
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Email</label>
                                <input id="De-place" type="email" name="email" placeholder="" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Vorwahl</label>
                                <div class="right-sidebar__item__form--date">

                                    <input type="text" class="form-control" name="abbr" placeholder="+02">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Telefon</label>
                                <div>

                                    <input type="text" name="mobile" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 m0 col-xs-12">
                            <label>Ihre Nachicht</label>
                            <div>

                                <textarea class="form-control" name="note" autocomplete="off"></textarea>
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
            <div class="col-sm-4 pull-right">
                <div class="right-sidebar__item__contact">
                    <h5>Get a Question?</h5>
                    <p>Do not hesitate to give us a call. We are an expert team and we happy to talk to you.</p>
                    <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/sidebar/phone.png" alt="phone"><span class="contact-phone">{{$config['phone']}} </span></a>
                    <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/sidebar/mail.png" alt="mail"><span>{{$config['email']}} </span></a>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="places">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 border-right">--}}
    {{--                <div class="single-place">--}}
    {{--                    <h4>Cairo</h4>--}}
    {{--                    <div class="add-list-media-header">--}}
    {{--                            <label class="checkbox inline"> --}}
    {{--                            <input type="checkbox" name="gender">--}}
    {{--                            <span>Pyramids</span> --}}
    {{--                            </label>--}}
    {{--                            <span><p class="price">$45</p></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="add-list-media-header">--}}
    {{--                            <label class="checkbox inline"> --}}
    {{--                            <input type="checkbox" name="gender">--}}
    {{--                            <span>Pyramids</span> --}}
    {{--                            </label>--}}
    {{--                            <span><p class="price">$45</p></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="add-list-media-header">--}}
    {{--                            <label class="checkbox inline"> --}}
    {{--                            <input type="checkbox" name="gender">--}}
    {{--                            <span>Pyramids</span> --}}
    {{--                            </label>--}}
    {{--                            <span><p class="price">$45</p></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="add-list-media-header">--}}
    {{--                            <label class="checkbox inline"> --}}
    {{--                            <input type="checkbox" name="gender">--}}
    {{--                            <span>Pyramids</span> --}}
    {{--                            </label>--}}
    {{--                            <span><p class="price">$45</p></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="add-list-media-header">--}}
    {{--                            <label class="checkbox inline"> --}}
    {{--                            <input type="checkbox" name="gender">--}}
    {{--                            <span>Pyramids</span> --}}
    {{--                            </label>--}}
    {{--                            <span><p class="price">$45</p></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="add-list-media-header">--}}
    {{--                            <label class="checkbox inline"> --}}
    {{--                            <input type="checkbox" name="gender">--}}
    {{--                            <span>Pyramids</span> --}}
    {{--                            </label>--}}
    {{--                            <span><p class="price">$45</p></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="add-list-media-header">--}}
    {{--                            <label class="inline"> --}}
    {{--                            <span><strong>Total</strong></span> --}}
    {{--                            </label>--}}
    {{--                            <span><p class="price total">$45</p></span>--}}
    {{--                    </div>--}}

    {{--                </div>--}}
    {{--                --}}
    {{--            </div>--}}
    {{--            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">--}}
    {{--                    <div class="single-place">--}}
    {{--                        <h4>Aswan</h4>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="inline"> --}}
    {{--                                <span><strong>Total</strong></span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price total">$45</p></span>--}}
    {{--                        </div>--}}
    {{--    --}}
    {{--                    </div>--}}
    {{--                    --}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="row">--}}
    {{--                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 border-right">--}}
    {{--                    <div class="single-place">--}}
    {{--                        <h4>Cairo</h4>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="checkbox inline"> --}}
    {{--                                <input type="checkbox" name="gender">--}}
    {{--                                <span>Pyramids</span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price">$45</p></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="add-list-media-header">--}}
    {{--                                <label class="inline"> --}}
    {{--                                <span><strong>Total</strong></span> --}}
    {{--                                </label>--}}
    {{--                                <span><p class="price total">$45</p></span>--}}
    {{--                        </div>--}}
    {{--    --}}
    {{--                    </div>--}}
    {{--                    --}}
    {{--                </div>--}}
    {{--                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">--}}
    {{--                        <div class="single-place">--}}
    {{--                            <h4>Aswan</h4>--}}
    {{--                            <div class="add-list-media-header">--}}
    {{--                                    <label class="checkbox inline"> --}}
    {{--                                    <input type="checkbox" name="gender">--}}
    {{--                                    <span>Pyramids</span> --}}
    {{--                                    </label>--}}
    {{--                                    <span><p class="price">$45</p></span>--}}
    {{--                            </div>--}}
    {{--                            <div class="add-list-media-header">--}}
    {{--                                    <label class="checkbox inline"> --}}
    {{--                                    <input type="checkbox" name="gender">--}}
    {{--                                    <span>Pyramids</span> --}}
    {{--                                    </label>--}}
    {{--                                    <span><p class="price">$45</p></span>--}}
    {{--                            </div>--}}
    {{--                            <div class="add-list-media-header">--}}
    {{--                                    <label class="checkbox inline"> --}}
    {{--                                    <input type="checkbox" name="gender">--}}
    {{--                                    <span>Pyramids</span> --}}
    {{--                                    </label>--}}
    {{--                                    <span><p class="price">$45</p></span>--}}
    {{--                            </div>--}}
    {{--                            <div class="add-list-media-header">--}}
    {{--                                    <label class="checkbox inline"> --}}
    {{--                                    <input type="checkbox" name="gender">--}}
    {{--                                    <span>Pyramids</span> --}}
    {{--                                    </label>--}}
    {{--                                    <span><p class="price">$45</p></span>--}}
    {{--                            </div>--}}
    {{--                            <div class="add-list-media-header">--}}
    {{--                                    <label class="checkbox inline"> --}}
    {{--                                    <input type="checkbox" name="gender">--}}
    {{--                                    <span>Pyramids</span> --}}
    {{--                                    </label>--}}
    {{--                                    <span><p class="price">$45</p></span>--}}
    {{--                            </div>--}}
    {{--                            <div class="add-list-media-header">--}}
    {{--                                    <label class="checkbox inline"> --}}
    {{--                                    <input type="checkbox" name="gender">--}}
    {{--                                    <span>Pyramids</span> --}}
    {{--                                    </label>--}}
    {{--                                    <span><p class="price">$45</p></span>--}}
    {{--                            </div>--}}
    {{--                            <div class="add-list-media-header">--}}
    {{--                                    <label class="inline"> --}}
    {{--                                    <span><strong>Total</strong></span> --}}
    {{--                                    </label>--}}
    {{--                                    <span><p class="price total">$45</p></span>--}}
    {{--                            </div>--}}
    {{--        --}}
    {{--                        </div>--}}
    {{--                        --}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--    </div>--}}

    {{--</section>--}}

@stop
