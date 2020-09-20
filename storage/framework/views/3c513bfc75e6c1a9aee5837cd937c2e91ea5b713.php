<?php $__env->startSection('title'); ?>
    <?php echo e(__('widgetsmodule::widgets.monialpagetitle')); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(adminurl('bower_components/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1> <?php echo e(__('widgetsmodule::widgets.monialpagetitle')); ?> </h1>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e(__('widgetsmodule::widgets.monialpagetitle')); ?></h3>
                    
                    <a href="<?php echo e(url('admin-panel/widgets/testimonials/create')); ?>" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; <?php echo e(__('widgetsmodule::widgets.addnew')); ?></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="SlidersIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo e(__('widgetsmodule::widgets.id')); ?></th>
                                <th><?php echo e(__('widgetsmodule::widgets.name')); ?></th>
                                <th><?php echo e(__('widgetsmodule::widgets.job_title')); ?></th>
                                <th><?php echo e(__('widgetsmodule::widgets.photo')); ?></th>
                                <th><?php echo e(__('widgetsmodule::widgets.quote')); ?></th>
                                <th><?php echo e(__('widgetsmodule::widgets.operation')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($item->id); ?> </td>

                                <td> <?php echo e($item->name); ?> </td>

                                <td> <?php echo e($item->job_title); ?> </td>

                                <td>
                                    <?php if($item->photo): ?>
                                        <img src="<?php echo e(asset('public/images/testimonials/' . $item->photo)); ?>" width="100" height="70">
                                    <?php else: ?>
                                        <p>No Photo</p>
                                    <?php endif; ?>
                                </td>

                                <td><?php echo substr($item->quote, 0, 15); ?></td>

                                <td>
                                    
                                    <?php if(auth()->check() && auth()->user()->hasRole('admin|superadmin')): ?>
                                    <a title="Edit" href="<?php echo e(url('admin-panel/widgets/testimonials/' . $item->id . '/edit')); ?>" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <?php endif; ?>

                                    
                                    <?php if(auth()->check() && auth()->user()->hasRole('superadmin')): ?>
                                    <form class="inline" action="<?php echo e(url('admin-panel/widgets/testimonials/' . $item->id)); ?>" method="POST">
                                        <?php echo e(method_field('DELETE')); ?> <?php echo csrf_field(); ?>
                                        <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete this Data?')" type="button"
                                            class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                    <?php endif; ?>
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

    <!-- page script -->
    <!-- DataTables -->
    <script src="<?php echo e(adminurl('bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(adminurl('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>