<?php $__env->startSection('header'); ?>

    <?php $__currentLoopData = $categoryTours->trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <meta name="title" content="<?php echo e($cat['meta_title']); ?>">
        <meta name="description" content="<?php echo e($cat['meta_desc']); ?>">
        <meta name="keywords" content="<?php echo e($cat['meta_keywords']); ?>">

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section>
        <div class="page-banner"
             style="background-image: url(<?php echo e(asset( 'public/images/trip_category/'. $categoryTours->cover_photo)); ?>);background-size: cover;">
            <div class="container">
                <div class="page-banner__tittle">
                    <h1><?php echo e($categoryTours->title); ?></h1>
                </div>
            </div>
        </div>
    </section>


    <section class="grid-left-sidebar">
        <div class="container">
            <?php if($categoryTours->child->count()>0): ?>
                <div class="col-4-tour__tittle" style="margin: 50px auto">
                    <!-- section tittle -->

                    <div class="section-tittle">
                        <h2>child Category</h2>
                        <div class="section-tittle__line-under"></div>
                        <p><span><?php echo e($categoryTours->title); ?></span></p> <br>


                    </div>
                    <span class="col-4-tour__sub-tittle"><?php echo e(strip_tags($categoryTours->description)); ?></span>


                </div>

                <div class="row">

                    <?php $__currentLoopData = $categoryTours->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-12 col-xl-4 col-sm-6 col-md-12">
                            <a href="<?php echo e(url('category')); ?>/<?php echo e($item->slug); ?>" class="trending-tour-item">

                                <?php if($item->photo != null): ?>
                                    <img class="trending-tour-item__thumnail" src="<?php echo e(asset('public/images/trip_category/' . $item->photo)); ?>" alt="<?php echo e($item->title); ?>">

                                <?php else: ?>
                                    <img class="trending-tour-item__thumnail" src="<?php echo e(asset('public/default/trips/default.jpg')); ?>" alt="<?php echo e($item->title); ?>">

                                <?php endif; ?>

                                <div class="trending-tour-item__info">
                                    <h3 class="trending-tour-item__name">
                                        <?php echo e($item->title); ?>

                                    </h3>

                                    <div class="trending-tour-item__group-infor">
                                        <div class="trending-tour-item__group-infor--left">
                                            


                                        </div>


                                        <p> <?php echo $item->description; ?></p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            <?php endif; ?>

            <?php if($categoryTours->trips->count()>0): ?>
                <div class="col-4-tour__tittle" style="margin: 50px auto">
                    <!-- section tittle -->

                    <div class="section-tittle">
                        <h2>trips</h2>
                        <div class="section-tittle__line-under"></div>
                        <p><span>trips</span></p> <br>


                    </div>


                </div>

                <div class="row">

                    <?php $__currentLoopData = $categoryTours->trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-12 col-xl-4 col-sm-6 col-md-12">
                            <a href="<?php echo e(route('front.tourItem',$trip->slug)); ?>" class="trending-tour-item">
                                <?php if($trip->photo != null): ?>
                                    <img class="trending-tour-item__thumnail" src="<?php echo e(asset('public/images/trip/' . $trip->photo)); ?>" alt="<?php echo e($trip->title); ?>">

                                <?php else: ?>
                                    <img class="trending-tour-item__thumnail" src="<?php echo e(asset('public/default/trips/default.jpg')); ?>" alt="<?php echo e($trip->title); ?>">

                                <?php endif; ?>


                                <div class="trending-tour-item__info">
                                    <h3 class="trending-tour-item__name">
                                        <?php echo e($trip->title); ?>

                                    </h3>

                                    <div class="trending-tour-item__group-infor">
                                        <div class="trending-tour-item__group-infor--left">
                                            

                                            <div class="trending-tour-item__group-infor__lasting">
                                                <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/tours/lasting.png" alt=""> <?php echo e($trip->days); ?> Days / <?php echo e($trip->days-1); ?> Nights
                                            </div>


                                        </div>

                                        <span class="trending-tour-item__group-infor__price">$<?php echo e($trip->price); ?></span>

                                        <p> <?php echo $trip->short_desc; ?></p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            <?php endif; ?>


        </div>

    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>