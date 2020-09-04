<?php $__env->startSection('title'); ?>
    <?php echo e(__('main.home')); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
           Admin Panel
        </h1>

    </section>


    <section class="content">



    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>