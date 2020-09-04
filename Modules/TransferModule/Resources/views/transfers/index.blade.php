@extends('commonmodule::layouts.master')

@section('title')
 {{__('transfermodule::transfer.pgtitle')}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ adminurl('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('transfermodule::transfer.pgtitle')}} </h1>
</section>
@endsection

@section('content')
<section class="content">
    <!-- Content Here -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('transfermodule::transfer.pgtitle')}}</h3>
                    {{-- Add New --}}
                    <a href="{{url('admin-panel/transfers/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{__('transfermodule::transfer.addnew')}}</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="tripIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{__('transfermodule::transfer.id')}}</th>
                                <th>{{__('transfermodule::transfer.title')}}</th>
                                <th>{{__('transfermodule::transfer.photo')}}</th>
                                <th>{{__('transfermodule::transfer.edit')}}</th>
                                <th>{{__('transfermodule::transfer.delete')}}</th>
                            </tr>
                        </thead>
                        <tbody>

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

<script src="{{adminurl('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{adminurl('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script>
    $(document).ready(function () {
        $('#tripIndex').DataTable({
            dom: 'lBfrtip',
            buttons: [
                { extend: 'print', text: 'طباعه',messageBottom:' <strong>جميع الحقوق محفوظة  IceCode .</strong>'},
                { extend: 'excel', text: ' اكسيل' },
            ] ,
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ url('admin-panel/transfers/ajax') }}",
                "type": "GET"
            },
            "columns": [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'photo', name: 'photo' },
                @role('admin|superadmin')
                    { data: 'edit', name: 'edit', orderable: false, searchable: false},
                @endrole
                @role('superadmin')
                    { data: 'delete', name: 'delete', orderable: false, searchable: false}
                @endrole

            ]
        });

    });
</script>
@endsection
