@extends('commonmodule::layouts.master')

@section('title')
  {{__('VideoModule::vidcateg.pagetitle')}}
@endsection

@section('css')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('VideoModule::vidcateg.pagetitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('VideoModule::vidcateg.pagetitle')}}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach 
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/videos/videocategory')}}" method="POST">
      {{ csrf_field() }}

      <div class="box-body">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              @foreach($activeLang as $lang)
              <li @if($loop->first) class="active" @endif >
                <a href="#{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
              </li>
              @endforeach

            </ul>

            <div class="tab-content">
              @foreach($activeLang as $lang)

              <div class="tab-pane @if($loop->first) active @endif" id="{{ $lang->display_lang }}">
                <div class="form-group">
                  {{-- title --}}
                  <label class="control-label col-sm-2" for="title">{{__('VideoModule::vidcateg.title')}} ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input data-validation="length alphanumeric" data-validation-length="min4" type="text" autocomplete="off" class="form-control"
                      placeholder="Write Title" name="{{$lang->lang}}[title]" required data-validation="alphanumeric">
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
        <a href="{{url('admin-panel/videos/videocategory')}}" type="button" class="btn btn-default">{{__('VideoModule::vidcateg.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{__('VideoModule::vidcateg.submit')}} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection
