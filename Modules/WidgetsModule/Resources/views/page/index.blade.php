@extends('commonmodule::layouts.master')

@section('title')
  {{__('widgetsmodule::widgets.pages')}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ adminurl('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('widgetsmodule::widgets.pages')}} </h1>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('widgetsmodule::widgets.pages')}}</h3>

                    {{-- Add New --}}
                    <a href="{{url('admin-panel/widgets/page/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{__('widgetsmodule::widgets.addnew')}}</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="TeamIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{__('widgetsmodule::widgets.id')}}</th>
                                <th>{{__('widgetsmodule::widgets.title')}}</th>
                                <th>{{__('widgetsmodule::widgets.photo')}}</th>
                                <th>{{__('widgetsmodule::widgets.content')}}</th>
                                <th>{{__('widgetsmodule::widgets.operation')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $item)
                            <tr>
                              <td> {{$item->id}} </td>

                              <td> {{$item->title}} </td>

                              <td>
                                  @if ($item->photo)
                                  <img src="{{asset('public/images/pages/' . $item->photo)}}" width="100" height="70">
                                  @else
                                      "<strong>No Photo</strong>"
                                  @endif
                              </td>

                              <td> <a href="{{url('admin-panel/widgets/page')}}/{{$item->id}}">{!!substr($item->content, 0, 10)!!}...</a> </td>

                              <td>
                                {{-- Edit --}}
                                @role('admin|superadmin')
                                <a title="Edit" href="{{url('admin-panel/widgets/page/' . $item->id . '/edit')}}" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                @endrole

                                {{-- Delete --}}
                                @role('superadmin')
                                <form class="inline" action="{{url('admin-panel/widgets/page/' . $item->id)}}" method="POST">
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

@section('javascript') {{-- sweet alert --}}
@include('commonmodule::includes.swal')

<!-- page script -->
<!-- DataTables -->
<script src="{{adminurl('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{adminurl('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#TeamIndex').DataTable({
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
