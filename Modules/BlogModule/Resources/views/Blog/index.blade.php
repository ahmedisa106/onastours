@extends('commonmodule::layouts.master')

@section('title')
    {{trans('blog::blog.index')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ adminurl('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
   @endsection


@section('content-header')
    <section class="content-header">
        <h1>
            {{trans('blog::blog.index')}}
        </h1>

    </section>
@endsection


@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('blog::blog.index')}}</h3>
                    <a href="{{url('admin-panel/blogs/create')}}" type="button" class="btn btn-success pull-right">
                        <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{trans('blog::blog.createnew')}}</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="blogIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{trans('blog::blog.id')}}</th>
                                <th>{{trans('blog::blog.title')}}</th>
                                <th>{{trans('blog::blog.feature')}}</th>
                                <th>{{trans('blog::blog.pic')}}</th>
                                <th>{{trans('blog::blog.op')}}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $item)
                                <tr>
                                    <td> {{$item->id}} </td>
                                    <td> {{$item->title}} </td>
                                    <td>
                                        @if($item->is_featured == 1)
                                            <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->photo)
                                            <img src="{{asset('public/images/blog/' . $item->photo)}}" height="70" width="100">
                                        @else
                                            "<strong>No Photo</strong>"
                                        @endif
                                    </td>
                                    <td> {{-- view --}}
                                        <a title="View" href="{{url('/admin-panel/blogs/' . $item->id)}}" type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            {{-- Edit --}}
                                        @role('admin|superadmin')
                                            <a title="Edit" href="{{url('/admin-panel/blogs/' . $item->id . '/edit')}}" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        @endrole
                                            {{-- Delete --}}
                                        @role('superadmin')
                                        <form class="inline" action="{{url('/admin-panel/blogs/delete/' . $item->id)}}" method="POST">
                                            {{ method_field('DELETE') }} {!! csrf_field() !!}
                                            <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete Blog ?')" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                        @endrole
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection


@section('javascript')


    @include('commonmodule::includes.swal')

    <!-- DataTables -->
    <script src="{{adminurl('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{adminurl('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#blogIndex').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
        })

    </script>
@endsection
