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
                    <h1>About Us</h1>
                    <p> <span></span> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutus-descript">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>{{$config['title']}}.</h3>
                </div>
            </div>
            <p>{{$config['about']}}</p>

        </div>
        <!-- <div class="aboutus-descript__img">
            <img src="{{url('/')}}/public/assets/front/assets/images/uploads/aboutus/aboutus1.jpg" alt="abloutus1">
            <img src="{{url('/')}}/public/assets/front/assets/images/uploads/aboutus/aboutus2.jpg" alt="abloutus2">
            <img src="{{url('/')}}/public/assets/front/assets/images/uploads/aboutus/aboutus3.jpg" alt="abloutus3">
        </div> -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="aboutus-descript__text aboutus-descript__text--left">
                        <div class="aboutus-descript__text__img"><img src="{{url('/')}}/public/assets/front/assets/images/uploads/aboutus/aboutus1.png" alt="aboutuspng1"></div>
                        <h5>Our Vision</h5>
                        <p>{{$config['vision']}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="aboutus-descript__text aboutus-descript__text--right">
                        <div class="aboutus-descript__text__img"><img src="{{url('/')}}/public/assets/front/assets/images/uploads/aboutus/aboutus2.png" alt="aboutuspng2"></div>
                        <h5>Our Mission</h5>
                        <p>{{$config['mission']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- <section>
        <div class="container">
            <h1 class="preview-video-aboutus__text-behind">Video</h1>
            <div class="preview-video-aboutus">
                <img class="preview-video-aboutus__thumb" src="{{url('/')}}/public/assets/front/assets/images/uploads/aboutus/preview-video.jpg" alt="preview-video">
                <span class="preview-video-aboutus__btn"><img src="{{url('/')}}/public/assets/front/assets/images/video-popup/btn-popup2.png" alt="button-pop"></span>
            </div>
        </div>

        <div class="preview-video-aboutus-popup">
            <div class="preview-video-aboutus-popup__close" ></div>
            <div class="preview-video-aboutus-popup__area">
                <span class="preview-video-aboutus-popup__btn-close" >&times;</span>
                <iframe class="preview-video-aboutus-popup__iframe" src="#" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" data-src = "https://www.youtube.com/embed/nrqqqAZ2ZgY?autoplay=1" allowfullscreen></iframe>
            </div>
        </div>
    </section> -->


    <section class="aboutus-status">

    <div class="container">
        <div class="page-figure">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="page-figure__figure">
                        <div class="page-figure__figure__text">
                            <span>20+</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="page-figure__figure">
                        <div class="page-figure__figure__text">
                            <span>300K</span>
                            <p>Hours on Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="page-figure__figure">
                        <div class="page-figure__figure__text">
                            <span>150+</span>
                            <p>Professional Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- <section class="aboutus-world-brg">
        <div class="container"> -->



            <!-- <div class="section-tittle-2">
            <p>Travel<span> Reviews</span></p>
            <div class="section-tittle__line-under"></div>
        </div>
            <p class="travel-review__sub-tittle">Etiam vitae enim eget urna efficitur commodo sed quis justo Lorem ipsum dolor sit amet.</p>

        </div> -->

        <!-- <div class="travel-review-4-area container">

            <div class="travel-review-4 row"  >

               @foreach($monials as $item)
               <a href="blog-single.html" class="travel-review">
                <div class="travel-review__avatar" style="width:100px;height:70px;"><img src="{{asset('public/images/testimonials/' . $item->photo)}}" alt="review2" style="border-radius:50%;"></div>
                <span class="travel-review__name">{{$item->name}}</span>
                <span class="travel-review__career">- {{$item->job_title}} -</span>
                <span class="travel-review__rating--4-star"></span>
                <p class="travel-review__content">{!! $item->quote !!}</p>
              </a>
            @endforeach




            </div>
        </div> -->


    <!-- </section> -->

    <!-- <section class="our-team">
        <div class="container">


            <div class="section-tittle-2">
            <p>Our<span> Teams</span></p>
            <div class="section-tittle__line-under"></div>
        </div>
            <p class="travel-review__sub-tittle">Morbi vitae iaculis turpis. Integer nec euismod tortor sapien.</p>

            <div class="row">
              @foreach($teams as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="our-member">
                        <img class="our-member__thumb" src="{{asset('public/images/team/' . $item->photo)}}" alt="ourteam1">
                        <div class="our-member__info">
                            <h5>{{$item->name}}</h5>
                            <span> - {{$item->job_title}} -</span>
                            <div class="our-member__info__social">
                                <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/abloutus/share1.png" alt="share1"></a>
                                <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/abloutus/share2.png" alt="share2"></a>
                                <a href="#"><img src="{{url('/')}}/public/assets/front/assets/images/abloutus/share3.png" alt="share3"></a>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach

            </div>
        </div>

        <div class="wand-container">
            <div class="partner">
                <div class="partner__item"> <img src="{{url('/')}}/public/assets/front/assets/images/uploads/destination/icon1.png" alt="icon1"></div>
                <div class="partner__item"> <img src="{{url('/')}}/public/assets/front/assets/images/uploads/destination/icon2.png" alt="icon2"></div>
                <div class="partner__item"> <img src="{{url('/')}}/public/assets/front/assets/images/uploads/destination/icon3.png" alt="icon3"></div>
                <div class="partner__item"> <img src="{{url('/')}}/public/assets/front/assets/images/uploads/destination/icon4.png" alt="icon4"></div>
                <div class="partner__item"> <img src="{{url('/')}}/public/assets/front/assets/images/uploads/destination/icon5.png" alt="icon5"></div>
            </div>
        </div>
    </section> -->


@stop
