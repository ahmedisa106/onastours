@extends('commonmodule::layouts.master')

@section('title')
 {{trans('blog::category.edit')}}
@endsection

@section('css')
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{adminurl('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    {{trans('blog::category.edit')}}
  </h1>

</section>
@endsection

@section('content')

<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{trans('blog::category.edit')}}</h3>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/blog-categories')}}/{{$category->id}}" method="post" enctype="multipart/form-data">
      {{ method_field('put') }}
      {{ csrf_field() }}
      <div class="box-body">
        <input type="hidden" name="id" value="{{$category->id}}">

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
                    {{-- Title --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::category.title')}} ({{$lang->display_lang}}):</label>
                    <div class="col-sm-8">
                      <input id="title_{{$lang->lang}}" type="text" autocomplete="off" value="{{ ValueOf($category, $lang, 'title') }}" class="form-control" name="{{ $lang->lang }}[title]"
                      @if($loop->first) required @endif>
                    </div>
                  </div>

                  <div class="form-group">
                    {{-- Description --}}
                    <label class="control-label col-sm-2" for="title">{{trans('blog::category.desc')}} ({{$lang->display_lang}}):</label>
                    <div class="col-sm-8">
                      <textarea class="textarea" name="{{ $lang->lang }}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($category, $lang, 'description') }}</textarea>
                    </div>
                  </div>

                </div>
              @endforeach

              </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        <div class="form-group">
          {{-- Parent Category --}}
          <label class="control-label col-sm-2" for="title">{{trans('blog::category.parent')}}:</label>
          <div class="col-sm-8">
            <select class="form-control" name="parent_id">
              <option value="0"> Parent Category </option>

              @foreach($categories as $cat)
                @if($cat->id != $category->id)
                  <option value="{{ $cat->id }}">
                    <pre>&nbsp;&nbsp;&nbsp;</pre>{{ $cat->title }}</option>
                @endif
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          {{-- Upload photo --}}
          <label class="control-label col-sm-2" for="img">{{trans('blog::category.pic')}}</label>
          <div class="col-sm-8">
            <input type="file" autocomplete="off" name="photo">
            @if($category->photo)
              <br>
              <img src="{{asset('/public/images/category/' . $category->photo)}}" style="margin-top: 5px;" height="70" width="100">
            @else
              <br>
              "<strong>No Photo</strong>"
            @endif
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
                            <a href="#seo{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
                        </li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        @foreach($activeLang as $lang)
                        <div class="tab-pane @if($loop->first) active @endif" id="seo{{ $lang->display_lang }}">

                            <div class="form-group">
                                {{-- Meta Title --}}
                                <label class="control-label col-sm-2" for="title"> {{__('tripmodule::trip.mt')}}({{ $lang->display_lang }}) :</label>
                                <div class="col-sm-8">
                                    <input id="meta_title_{{ $lang->lang }}" type="text" autocomplete="off" class="form-control" placeholder="Write information about your title"
                                        name="{{$lang->lang}}[meta_title]" value="{{ ValueOf($category, $lang, 'meta_title') }}">
                                </div>

                            </div>

                            <div class="form-group">
                                {{-- Meta Description --}}
                                <label class="control-label col-sm-2" for="desc"> {{__('tripmodule::trip.md')}}({{ $lang->display_lang }}) :</label>
                                <div class="col-sm-8">
                                    <textarea id="meta_desc_{{$lang->lang}}" class="form-control" autocomplete="off" placeholder="Write information about your description" name="{{$lang->lang}}[meta_desc]"
                                        cols="15" rows="2">{{ ValueOf($category, $lang, 'meta_desc') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                {{-- Meta Keywords --}}
                                <label class="control-label col-sm-2" for="tags"> {{__('tripmodule::trip.tags')}}({{ $lang->display_lang }}) :</label>
                                <div class="col-sm-8">
                                    <input id="countKeyWords{{$lang->lang}}" autocomplete="off" type="text" class="form-control" name="{{$lang->lang}}[meta_keywords]" value="{{ ValueOf($category, $lang, 'meta_keywords') }}">
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="slug">Slug({{ $lang->display_lang }}) : </label>
                                <div class="col-sm-8">
                                    <input id="slug_{{$lang->lang}}" type="text" autocomplete="off" class="form-control" name="{{$lang->lang}}[slug]" value="{{ ValueOf($category, $lang, 'slug') }}">
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        <!-- /.box-body -->
      </div>
      <div class="box-footer">
        <a href="{{url('/admin-panel/blog-categories')}}" type="button" class="btn btn-default">{{trans('blog::category.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{trans('blog::category.submit')}} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
</section>
@endsection

@section('javascript') {{-- Treeview --}}
<script src="{{adminurl('metro.js')}}"></script>

<script src="{{adminurl('bower_components/speaking-url/speakingurl.min.js')}}">
</script>


{{-- jQuery Count letters --}}
@include('tripmodule::Trip.js') {{-- jQuery Bind data --}}
@include('tripmodule::Trip.copy')

{{-- jQuery Count letters --}}
@include('blog::Blog.js')

<!-- Bootstrap WYSIHTML5 -->
<script src="{{adminurl('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
@if($category->parent)
<script>
  $(document).ready(function (){
    if( $('option').has("{{$category->parent->title}}") )
      $('select').val('{{$category->parent->id}}');
  });
</script>
@endif


<script>
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5({
      toolbar: {
        "font-styles": true,
        "emphasis": true,
        "lists": true,
        "html": true,
        "link": true,
        "image": false
      }
    });
  });

</script>

<!-- jQuery form validator -->
<script src="{{adminurl('plugins/jquery_form_validator/jquery.form-validator.min.js')}}"></script>
<script>
  $.validate();

</script>

@endsection
