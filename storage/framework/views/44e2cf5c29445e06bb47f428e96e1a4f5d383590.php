<?php $__env->startSection('title'); ?>
 <?php echo e(__('tripmodule::trip.pagecategtitle')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(adminurl('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1> <?php echo e(__('tripmodule::trip.pagecategtitle')); ?> </h1>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
    <!-- Content Here -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e(__('tripmodule::trip.pagecategtitle')); ?></h3>
                    
                    <a href="<?php echo e(url('admin-panel/trip/category/create')); ?>" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; <?php echo e(__('tripmodule::trip.addnew')); ?></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="categIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo e(__('tripmodule::trip.id')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.title')); ?></th>
                                <th>parent category</th>
                                <th><?php echo e(__('tripmodule::trip.photo')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.edit')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.delete')); ?></th>
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
        $('#categIndex').DataTable({
            dom: 'lBfrtip',
            buttons: [
                { extend: 'print',messageBottom:' <strong>All Rights Reserved to IceCode .</strong>'},
                { extend: 'excel' },
            ] ,
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?php echo e(url('admin-panel/trip/category/ajax')); ?>",
                "type": "GET"
            },
            "columns": [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'parent_category', name: 'parent_category' },
                { data: 'photo', name: 'photo' },
                <?php if(auth()->check() && auth()->user()->hasRole('admin|superadmin')): ?>
                { data: 'edit', name: 'edit', orderable: false, searchable: false},
                <?php endif; ?>
                <?php if(auth()->check() && auth()->user()->hasRole('superadmin')): ?>
                { data: 'delete', name: 'delete', orderable: false, searchable: false}
                <?php endif; ?>

            ]
        });

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>