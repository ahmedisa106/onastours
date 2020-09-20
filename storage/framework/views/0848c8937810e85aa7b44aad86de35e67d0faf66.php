<?php $__env->startSection('title'); ?>
    <?php echo e(__('photoalbummodule::photocateg.Photopage')); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1>  <?php echo e(__('photoalbummodule::photocateg.Photopage')); ?> </h1>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"> <?php echo e(trans('photoalbummodule::photocateg.Photopage')); ?></h3>
                        
                        <a href="<?php echo e(url('admin-panel/photos/photo/create')); ?>" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp;  <?php echo e(__('photoalbummodule::photocateg.addnew')); ?></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="categoriesIndex" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> <?php echo e(__('photoalbummodule::photocateg.id')); ?></th>
                                <th> <?php echo e(__('photoalbummodule::photocateg.title')); ?></th>
                                <th><?php echo e(__('photoalbummodule::photocateg.photo')); ?></th>
                                <th> <?php echo e(__('photoalbummodule::photocateg.operation')); ?></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($photo->id); ?> </td>

                                    <td> <?php echo e($photo->title); ?> </td>

                                    <td>
                                        <?php if($photo->photo): ?>
                                            <img src="<?php echo e(asset('public/images/photo/' . $photo->photo)); ?>" height="70" width="100">
                                        <?php else: ?>
                                            "<strong>No Photo</strong>"
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        
                                        <a title="Edit" href="<?php echo e(url('admin-panel/photos/photo/' . $photo->id . '/edit')); ?>" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        
                                        <form class="inline" action="<?php echo e(url('admin-panel/photos/photo/' . $photo->id)); ?>" method="POST">
                                            <?php echo e(method_field('DELETE')); ?> <?php echo csrf_field(); ?>
                                            <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete this Data?')" type="button"
                                                    class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
            $('#categoriesIndex').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                'language': <?php echo yajra_lang(); ?>
            });
        })

    </script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>