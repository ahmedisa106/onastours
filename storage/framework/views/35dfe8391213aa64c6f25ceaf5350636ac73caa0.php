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
            <div class="row">


                <div class="col-xl-12 mb-1" style="text-align: center;">
                    <p class="text"><?php echo $categoryTours->description; ?></p>
                </div>

                <div class="row">

                    <?php $__currentLoopData = $categoryTours->trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-12 col-xl-4 col-sm-6 col-md-12">
                            <a href="<?php echo e(route('front.tourItem',$trip->slug)); ?>" class="trending-tour-item">

                                <img class="trending-tour-item__thumnail"
                                     src="<?php echo e(asset('public/images/trip/' . $trip->photo)); ?>" alt="<?php echo e($trip->title); ?>">
                                <div class="trending-tour-item__info">
                                    <h3 class="trending-tour-item__name">
                                        <?php echo e($trip->title); ?>

                                    </h3>

                                    <div class="trending-tour-item__group-infor">
                                        <div class="trending-tour-item__group-infor--left">
                                            

                                            <div class="trending-tour-item__group-infor__lasting">
                                                <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/tours/lasting.png"
                                                     alt="">
                                                5 Days / 4 Nights
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


                <!-- <div class="wander-pagination__pagination">
                <div class="wander-pagination__pagination__paging current">1</div>
                <div class="wander-pagination__pagination__paging">2</div>
                <div class="wander-pagination__pagination__paging">3</div>
                <div class="wander-pagination__pagination__paging"><i class="fa fa-angle-right"></i></div> -->
            </div>

        </div>


        </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>