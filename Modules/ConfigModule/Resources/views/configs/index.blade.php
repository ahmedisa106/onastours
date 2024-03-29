@extends('commonmodule::layouts.master')

@section('title')
    {{trans('configmodule::settings.settings')}}
@endsection

@section('css')

@endsection

@section('content-header')
    <section class="content-header">
        <h1>
            {{trans('configmodule::settings.settings')}}
        </h1>

    </section>
@endsection

@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"> {{trans('configmodule::settings.settings')}}</h3>
            </div>
            <form class="form-horizontal" action="{{url('/admin-panel/config-module/update')}}" method="POST"
                  enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="box-body">
                        <div class="col-md-9">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">

                                    @foreach($config_categs as $categ)
                                        <li @if($loop->first) class="active" @endif >
                                            <a href="#{{ $categ->id}}" data-toggle="tab"><strong>{{ $categ->title}}</strong></a>
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="tab-content">
                                    @foreach($config_categs as $categ)
                                        <div class="tab-pane @if($loop->first) active @endif" id="{{ $categ->id}}">
                                            <div class="nav-tabs-custom">
                                                <ul class="nav nav-tabs">
                                                    @foreach($activeLang as $lang)
                                                        <li @if($loop->first) class="active" @endif >
                                                            <a href="#{{ $categ->title }}{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>


                                                <div class="tab-content">
                                                    @foreach($activeLang as $lang)
                                                    
                                                        <div class="tab-pane @if($loop->first) active @endif" id="{{ $categ->title }}{{ $lang->display_lang }}">

                                                            @foreach($categ->configs as $cat)
                                                                @if($cat->is_static == 0)
                                                                    @if($cat->type == 1)
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-2">{{$cat->translate($lang->lang)->display_name}}:</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" autocomplete="off" value="{{$cat->translate($lang->lang)->value}}" class="form-control" name="{{$lang->lang}}[{{$cat->var}}]">
                                                                            </div>
                                                                        </div>
                                                                    @elseif($cat->type == 2)
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-2" for="img">{{$cat->translate($lang->lang)->display_name}}:</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="file" autocomplete="off" name="{{ $lang->lang }}[{{$cat->var}}]">
                                                                            </div>
                                                                            <img src="{{ asset('images/config') }}/{{$cat->translate($lang->lang)->value}}" width="100" height="100">
                                                                        </div>
                                                                    @elseif($cat->type == 3)
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-2" for="img">{{$cat->translate($lang->lang)->display_name}}:</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea name="{{ $lang->lang }}[{{$cat->var}}]" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$cat->translate($lang->lang)->value}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <!-- /.tab-content -->
                                            </div>
                                            @foreach($categ->configs as $cat)
                                            @if($cat->is_static == 1)
                                                @if($cat->type == 1)
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">{{$cat->display_name}}:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" autocomplete="off" value="{{ $cat->static_value }}" class="form-control" name="{{$cat->var}}">
                                                        </div>
                                                    </div>
                                                @elseif($cat->type == 2)
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="img">{{$cat->display_name}}:</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" autocomplete="off" name="{{$cat->var}}">
                                                        </div>
                                                        <img src="{{ asset('images/config') }}/{{$cat->static_value}}" width="100" height="100">
                                                    </div>
                                                @elseif($cat->type == 3)
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="img">{{$cat->display_name}}:</label>
                                                        <div class="col-sm-9">
                                                            <textarea name="{{$cat->var}}" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$cat->static_value}}</textarea>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                            @endforeach
                                        </div>

                                    @endforeach
                                </div>
                            </div>

                        </div>


                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">
                        {{trans('configmodule::settings.update')}} &nbsp;
                        <i class="fa fa-save"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>
@endsection

@section('javascript')

    @include('commonmodule::includes.swal')

@endsection
