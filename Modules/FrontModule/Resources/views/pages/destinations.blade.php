
@extends('frontmodule::layouts.master')

@section('header')

    @foreach($destinations as $destination )
        <meta name="title" content="{{$destination['meta_title']}}">
        <meta name="description" content="{{$destination['meta_desc']}}">
        <meta name="keywords" content="{{$destination['meta_keywords']}}">
    @endforeach

@stop
@section('content')



<section>
    <div class="page-banner">
        <div class="container">
            <div class="page-banner__tittle">
                <h1>Destinations </h1>
                <p> <span></span> </p>
            </div>
        </div>
    </div>
</section>

<section class="destination-grid-layout">
    <div class="container">
        <div class="row">
           @foreach($destinations as  $distination)
            <div class="col-lg-4 col-md-6">
                <a href="{{route('front.destinationItem',$distination->slug)}}" class="top-desti__item">
                    <img src="{{asset('public/images/destination/' . $distination->photo)}}" alt="desti1">
                    <div class="top-desti__ammout">
                        <span><i class="fa fa-map-marker"></i>{{$distination->title}}</span>
                        <span>38 Tours</span>
                    </div>
                </a>
            </div>
           @endforeach


        </div>

        <!-- pagination -->
 <!-- <div class="wander-pagination__pagination">
    <div class="wander-pagination__pagination__paging current">1</div>
    <div class="wander-pagination__pagination__paging">2</div>
    <div class="wander-pagination__pagination__paging">3</div>
    <div class="wander-pagination__pagination__paging"><i class="fa fa-angle-right"></i></div>
</div>    -->
    </div>

</section>

@stop

