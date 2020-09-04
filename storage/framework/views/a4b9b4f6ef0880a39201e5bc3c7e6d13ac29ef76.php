<?php $__env->startSection('header'); ?>
    <meta name="title" content="<?php echo e($config['meta_title']); ?>">
    <meta name="description" content="<?php echo e($config['meta_desc']); ?>">
    <meta name="keywords" content="<?php echo e($config['meta_keywords']); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <section>
        <div class="page-banner">
            <div class="container">
                <div class="page-banner__tittle">
                    <h1><?php echo e($page->title); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutus-descript">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3><?php echo e($page->title); ?></h3>
                </div>
            </div>
            <p>Phasellus laoreet ullamcorper maximus. Curabitur quam sapien. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Reiciendis nostrum, velit id quo, excepturi minus perspiciatis, quisquam aspernatur
                quibusdam officiis quia est rem amet molestias! Provident, vel nesciunt cupiditate, corrupti facilis
                vero porro quam natus delectus pariatur est quaerat mollitia?</p>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>