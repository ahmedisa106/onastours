<?php $__env->startSection('header'); ?>

    <?php $__currentLoopData = $destination->trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <meta name="title" content="<?php echo e($trip['meta_title']); ?>">
        <meta name="description" content="<?php echo e($trip['meta_desc']); ?>">
        <meta name="keywords" content="<?php echo e($trip['meta_keywords']); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<section>
    <div class="destination-item-banner">
        <div class="container">
            <div class="destination-item-banner__tittle">
                <h1><?php echo e($destination->title); ?></h1>
            </div>
        </div>
    </div>
</section>




   <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <aside class="destination-item-aside">
                            <div class="destination-item-aside__item">
                                <h2>
                                <?php echo e($destination->title); ?>

                                </h2>
                                <p><?php echo $destination->description; ?></p>

                            </div>

    <!-- section tittle -->
        <div class="destination-item-aside__relate-tour__tittle">
                <div class="section-tittle">
                    <h2>Discover</h2>
                    <div class="section-tittle__line-under"></div>
                    <p><?php echo e($destination->title); ?> <span>Tour</span></p>
                </div>
        </div>

  <div class="related-tour row">

    <?php $__currentLoopData = $destination->trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="related-tour__item">
            <a href="" class="trending-tour-item">

                <img  class="trending-tour-item__thumnail" src="<?php echo e(asset('public/images/trip/' . $trip->photo)); ?>" alt="tajmaha">
                <div class="trending-tour-item__info">
                    <h3 class="trending-tour-item__name">
                    <?php echo e($trip->title); ?>

                    </h3>
                    <div class="trending-tour-item__group-infor">
                        <div class="trending-tour-item__group-infor--left">
                            <span class="trending-tour-item__group-infor__rating--4star"></span>
                            <div class="trending-tour-item__group-infor__lasting"><img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/tours/lasting.png" alt="lasting"><?php echo e($trip->days); ?> Days / <?php echo e($trip->days-1); ?> Nights</div>
                        </div>

                        <span class="trending-tour-item__group-infor__price">$<?php echo e($trip->price); ?></span>

                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




  </div>


</aside>
            </div>

        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>