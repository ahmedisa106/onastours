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
            <p>Phasellus laoreet ullamcorper maximus. Curabitur quam sapien. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Reiciendis nostrum, velit id quo, excepturi minus perspiciatis, quisquam aspernatur
                quibusdam officiis quia est rem amet molestias! Provident, vel nesciunt cupiditate, corrupti facilis
                vero porro quam natus delectus pariatur est quaerat mollitia?</p>

        </div>
    </section>
@stop
