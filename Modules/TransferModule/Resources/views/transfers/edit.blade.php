@extends('commonmodule::layouts.master')
@section('title') {{__('transfermodule::transfer.pgtitle')}}
@endsection

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{adminurl('bower_components/select2/dist/css/select2.min.css')}}"> {{-- Metro CSS --}}
<link rel="stylesheet" href="{{adminurl('treeview.css')}}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('transfermodule::transfer.pgtitle')}} </h1>
</section>
@endsection

@section('content')
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{__('transfermodule::transfer.pgtitle')}}</h3>
        </div>
        @if (count($errors) > 0) @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
        @endforeach @endif
        <!-- /.box-header -->
        <form class="form-horizontal" action="{{url('/admin-panel/transfers')}}/{{ $transfer->id }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }} {{ csrf_field() }}

            <div class="box-body">

                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            @foreach($activeLang as $lang)
                            <li @if($loop->first) class="active" @endif>
                                <a href="#{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($activeLang as $key=>$lang)
                            <div class="tab-pane @if($loop->first) active @endif" id="{{ $lang->display_lang }}">
                                <div class="form-group">
                                    {{-- title --}}
                                    <label class="control-label col-sm-2" for="title">{{__('transfermodule::transfer.title')}}({{ $lang->display_lang }}) :</label>
                                    <div class="col-sm-8">
                                        <input id="title_{{$lang->lang}}" autocomplete="off" class="form-control"
                                               name="{{ $lang->lang }}[title]" type="text" autocomplete="off"
                                            class="form-control" @if ($loop->first) required
                                        @endif value="{{ ValueOf($transfer, $lang, 'title') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{-- Description --}}
                                    <label class="control-label col-sm-2" for="title">{{__('transfermodule::transfer.desc')}}({{ $lang->display_lang }}) :</label>
                                    <div class="col-sm-8">
                                        <textarea id="desc{{ $lang->id }}" name="{{$lang->lang}}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($transfer, $lang, 'description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->


                    {{-- Upload photo --}}
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="photo">{{__('transfermodule::transfer.sort_order')}} :</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" autocomplete="off" value="{{ $transfer->sort_order }}" name="sort_order">
                        </div>

                        <label class="control-label col-sm-2" for="photo">{{__('transfermodule::transfer.photo')}} :</label>
                        <div class="col-sm-4">
                            <input data-validation="required" type="file" autocomplete="off" name="photo"> @if ($transfer->photo)
                            <br>
                            <img src="{{ asset( " public/images/transfer/ ".$transfer->photo) }}"> @else
                            <br>
                            <strong>"No Photo"</strong> @endif
                        </div>
                    </div>


                    <div class="form-group">
                            <div class="box-header">
                                <pre><h4>SEO Columns : </h4></pre>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    @foreach($activeLang as $lang)
                                        <li @if($loop->first) class="active" @endif >
                                            <a href="#seo{{ $lang->display_lang }}"
                                               data-toggle="tab">{{ $lang->display_lang }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="tab-content">
                                    @foreach($activeLang as $lang)
                                        <div class="tab-pane @if($loop->first) active @endif"
                                             id="seo{{ $lang->display_lang }}">


                                            <div class="form-group">
                                                {{-- Meta Title --}}
                                                <label class="control-label col-sm-2"
                                                       for="title"> {{__('tripmodule::trip.mt')}} :</label>
                                                <div class="col-sm-8">
                                                    <input id="meta_title_{{ $lang->lang }}" type="text"
                                                           autocomplete="off" class="form-control"
                                                           name="{{ $lang->lang }}[meta_title]"
                                                           value="{{ ValueOf($transfer, $lang, 'meta_title') }}">
                                                    <!-- <span id="titleSpan_{{ $lang->lang }}"></span> -->
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                {{-- Meta Description --}}
                                                <label class="control-label col-sm-2"
                                                       for="desc"> {{__('tripmodule::trip.md')}} :</label>
                                                <div class="col-sm-8">
                                            <textarea  id="meta_desc_{{$lang->lang}}" class="form-control" autocomplete="off"
                                                      name="{{ $lang->lang }}[meta_desc]" cols="15"
                                                      rows="2">{{ ValueOf($transfer, $lang, 'meta_desc') }}</textarea>
                                                    <!-- <span id="descSpan_{{$lang->lang}}"></span> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {{-- Meta Keywords --}}
                                                <label class="control-label col-sm-2" for="tags"> Meta Keywords
                                                    / {{__('tripmodule::trip.tags')}} :</label>
                                                <div class="col-sm-8">
                                                    <input  id="countKeyWords{{$lang->lang}}" autocomplete="off"
                                                           type="text" class="form-control"
                                                           name="{{ $lang->lang }}[meta_keywords]"
                                                           value="{{ ValueOf($transfer, $lang, 'meta_keywords') }}">
                                                    <!-- <span id="tagsSpan"></span> -->
                                                </div>
                                            </div>

                                            <!-- Slug -->
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="slug">Slug : </label>
                                                <div class="col-sm-8">
                                                    <input id="slug_{{$lang->lang}}" type="text" autocomplete="off" class="form-control"
                                                           name="{{ $lang->lang }}[slug]"
                                                           value="{{ ValueOf($transfer, $lang, 'slug') }}">
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach


                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/admin-panel/transfers')}}" type="button" class="btn btn-default">{{__('transfermodule::transfer.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>

                <button type="submit" class="btn btn-primary pull-right">{{__('transfermodule::transfer.submit')}} &nbsp; <i class="fa fa-save"></i></button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</section>
@endsection

@section('javascript') {{-- Treeview --}}
<script src="{{adminurl('metro.js')}}"></script>

<script src="{{adminurl('bower_components/speaking-url/speakingurl.min.js')}}">
</script>


{{-- jQuery Count letters --}}
@include('tripmodule::Trip.js') {{-- jQuery Bind data --}}
@include('tripmodule::Trip.copy')

<!-- CK Editor -->
<script src="{{adminurl('bower_components/ckeditor/ckeditor.js')}}"></script>

<!-- Select2 -->
<script src="{{adminurl('bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script>
    //Initialize Select2 Elements
  $('.select2').select2();

</script>

@foreach ($activeLang as $lang)
<script>
    $(function () {
    CKEDITOR.replace('desc' + '{{ $lang->id }}');
  });

</script>
@endforeach
@endsection
