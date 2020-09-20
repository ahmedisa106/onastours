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

        </div>
    </section>
@stop
