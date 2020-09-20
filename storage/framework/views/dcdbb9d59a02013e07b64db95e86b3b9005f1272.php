<?php $__env->startSection('title'); ?>
    <?php echo e(trans('adminmodule::admin.admins')); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(adminurl('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1> <?php echo e(trans('adminmodule::admin.admins')); ?> </h1>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo e(trans('adminmodule::admin.admins')); ?></h3>
                        
                        <a href="<?php echo e(url('admin-panel/admins/create')); ?>" type="button" class="btn btn-success pull-right">
                            <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; <?php echo e(trans('adminmodule::admin.add_new')); ?>
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="adminsTable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th><?php echo e(trans('adminmodule::admin.name')); ?></th>
                                <th><?php echo e(trans('adminmodule::admin.email')); ?></th>
                                <th><?php echo e(trans('adminmodule::admin.op')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($admin->id); ?> </td>

                                    <td> <?php echo e($admin->name); ?> </td>

                                    <td> <?php echo e($admin->email); ?> </td>

                                    <td>
                                        
                                        <a title="Edit" href="<?php echo e(url('admin-panel/admins/' . $admin->id . '/edit')); ?>" type="button" class="btn btn-primary">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        
                                        <form class="inline" action="<?php echo e(url('admin-panel/admins/' . $admin->id)); ?>" method="POST">
                                            <?php echo e(method_field('DELETE')); ?> <?php echo csrf_field(); ?>
                                            <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete Admin Data?')" type="button"
                                                    class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<!-- DataTables -->
<script src="<?php echo e(asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>

<script>
    $(document).ready(function () {
        $('#adminsTable').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        });
    })

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>