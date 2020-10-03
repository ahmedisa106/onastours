<?php $__env->startSection('title'); ?>
    <?php echo e(__('tripmodule::trip.trips')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(adminurl('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1> <?php echo e(__('tripmodule::trip.trips')); ?> </h1>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content">
        <!-- Content Here -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo e(__('tripmodule::trip.trips')); ?></h3>
                        
                        <a href="<?php echo e(url('admin-panel/trip/create')); ?>" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; <?php echo e(__('tripmodule::trip.addnew')); ?></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tripIndex" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><?php echo e(__('tripmodule::trip.id')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.title')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.price')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.Category')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.destination')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.days')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.photo')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.home_page')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.operations')); ?></th>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

    <?php echo $__env->make('commonmodule::includes.swal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script src="<?php echo e(adminurl('bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(adminurl('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
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
                    {extend: 'print', messageBottom: ' <strong>All rights Reserved to MallaH SOFT .</strong>'},
                    {extend: 'excel'},
                ],
                "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "<?php echo e(url('admin-panel/trip/ajax')); ?>",
                    "type": "GET"
                },
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'price', name: 'price'},
                    {data: 'category', name: 'category'},
                    {data: 'destination', name: 'destination'},
                    {data: 'days', name: 'days'},
                    {data: 'photo', name: 'photo'},
                    {data: 'home_page', name: 'home_page'},
                <?php if(auth()->check() && auth()->user()->hasRole('admin|superadmin')): ?>
                    {data: 'operations', name: 'operations', orderable: false, searchable: false},
                <?php endif; ?>
                ]
            });

        });


    </script>

    <script>
        $(document).on('click', '#updateHome', function (e) {

            e.preventDefault();
            $tr = $(this).closest('tr');
            $icon = $tr.find('#icon');

            $id = $tr.find('#trip_id').val();
            $active = $tr.find('#active').val();
            $icon.removeClass('fa fa-check');
            $icon.removeClass('fa fa-close');
            $icon.addClass('fa fa-spinner');
            $icon.addClass('fa fa-check');
            $.ajax({
                'type': 'POST',
                'url': '<?php echo e(route('trip.homepage')); ?>',
                data: {
                    '_token': '<?php echo e(csrf_token()); ?>',
                    'id': $id,
                    'active': $active,

                },

                'statusCode': {
                    200: function (response) {


                        swal("رائع", "تم تحديث  المنتج بنحاح!", "success", {button: "Ok",});
                        $('#tripIndex').DataTable().ajax.reload();

                    },
                    404: function (response) {
                    },
                }
            });


        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>