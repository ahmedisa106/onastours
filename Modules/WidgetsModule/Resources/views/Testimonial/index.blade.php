@extends('commonmodule::layouts.master')

@section('title')
    {{__('widgetsmodule::widgets.monialpagetitle')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{adminurl('bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
    <section class="content-header">
        <h1> {{__('widgetsmodule::widgets.monialpagetitle')}} </h1>
    </section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('widgetsmodule::widgets.monialpagetitle')}}</h3>
                    {{-- Add New --}}
                    <a href="{{url('admin-panel/widgets/testimonials/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{__('widgetsmodule::widgets.addnew')}}</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="SlidersIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{__('widgetsmodule::widgets.id')}}</th>
                                <th>{{__('widgetsmodule::widgets.name')}}</th>
                                <th>{{__('widgetsmodule::widgets.job_title')}}</th>
                                <th>{{__('widgetsmodule::widgets.photo')}}</th>
                                <th>{{__('widgetsmodule::widgets.quote')}}</th>
                                <th>{{__('widgetsmodule::widgets.operation')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonial as $item)
                            <tr>
                                <td> {{$item->id}} </td>

                                <td> {{$item->name}} </td>

                                <td> {{$item->job_title}} </td>

                                <td>
                                    @if ($item->photo)
                                        <img src="{{asset('public/images/testimonials/' . $item->photo)}}" width="100" height="70">
                                    @else
                                        <p>No Photo</p>
                                    @endif
                                </td>

                                <td>{!!substr($item->quote, 0, 15)!!}</td>

                                <td>
                                    {{-- Edit --}}
                                    @role('admin|superadmin')
                                    <a title="Edit" href="{{url('admin-panel/widgets/testimonials/' . $item->id . '/edit')}}" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    @endrole

                                    {{-- Delete --}}
                                    @role('superadmin')
                                    <form class="inline" action="{{url('admin-panel/widgets/testimonials/' . $item->id)}}" method="POST">
                                        {{ method_field('DELETE') }} {!! csrf_field() !!}
                                        <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete this Data?')" type="button"
                                            class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

    <!-- page script -->
    <!-- DataTables -->
    <script src="{{adminurl('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{adminurl('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#SlidersIndex').DataTable({
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
