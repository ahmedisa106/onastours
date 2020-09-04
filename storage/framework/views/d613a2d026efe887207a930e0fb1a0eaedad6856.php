<?php $__env->startSection('title'); ?>
 <?php echo e(__('tripmodule::trip.destination')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(adminurl('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1> <?php echo e(__('tripmodule::trip.destination')); ?> </h1>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
    <!-- Content Here -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e(__('tripmodule::trip.destination')); ?></h3>
                    
                    <a href="<?php echo e(url('admin-panel/destination/create')); ?>" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; <?php echo e(__('tripmodule::trip.addnew')); ?></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="categIndex" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo e(__('tripmodule::trip.id')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.title')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.photo')); ?></th>
                                <th><?php echo e(__('tripmodule::trip.operations')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>

                                    <td><?php echo e($item->title); ?></td>

                                    <td>
                                        <?php if($item->photo): ?>
                                            <img src="<?php echo e(asset('public/images/destination/' . $item->photo)); ?>" height="70" width="100">
                                        <?php else: ?>
                                            <strong>No Photo</strong>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        
                                        <?php if(auth()->check() && auth()->user()->hasRole('admin|superadmin')): ?>
                                        <a title="Edit" href="<?php echo e(url('admin-panel/destination/' . $item->id . '/edit')); ?>" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <?php endif; ?>
                                            
                                        <?php if(auth()->check() && auth()->user()->hasRole('superadmin')): ?>
                                        <form class="inline" action="<?php echo e(url('admin-panel/destination/delete/' . $item->id)); ?>" method="POST">
                                            <?php echo e(method_field('DELETE')); ?> <?php echo csrf_field(); ?>

                                            <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete Category?')" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>