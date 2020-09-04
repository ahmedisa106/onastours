<?php $__env->startSection('content'); ?>


    <section>
        <h2 class="galery-h2">galerry</h2>
        <div class="gallery">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <img src="<?php echo e(asset('public/images/sliders/' . $item->photo)); ?>" height='500px' alt="gall1">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <!-- dfdfdfdfd-->
        </div>
        <div class="gallery-control">
            <div class="gallery-control__left">
                <div class="gallery-control__arrow">
                    <span class="leftArrow"><i class='fa fa-angle-left'></i></span>
                    <span class="rightArrow"><i class='fa fa-angle-right'></i></span>
                </div>
            </div>
        </div>
    </section>

    <section class="destination-3">
        <div class="container">
            <div class="destination-3__figure">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <a href="" class="destination-3__figure-item">
                            <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/uploads/destination/icon7.png"
                                 alt="icon7">
                            <h5>500+ Local Guides</h5>
                            <p>Fusce venenatis nunc ac elit pellentesque laoreet vitae a orci augue eores fignei.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="" class="destination-3__figure-item">
                            <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/uploads/destination/icon8.png"
                                 alt="icon7">
                            <h5>Handcrafted Experience</h5>
                            <p>Etiam et faucibus tellus, eget ultricies enim. Vivamus accumsan confence.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a href="" class="destination-3__figure-item">
                            <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/uploads/destination/icon9.png"
                                 alt="icon7">
                            <h5>100% Happy Travelers</h5>
                            <p> Praesent a nulla varius, consectetur tellus ut, egestas mi librro non.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="destination-5">
        <div class="container">
            <div class="destination-5__tittle">
                <!-- section tittle -->
                <div class="section-tittle">
                    <h2>discover now</h2>
                    <div class="section-tittle__line-under"></div>
                    <p>Top <span>Destination</span></p>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=> $distination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-sm-6">

                        <a href="<?php echo e(url('destination/')); ?>/<?php echo e($distination->slug); ?>" class="destination-5__item">

                            <?php if($index %2 !=0): ?>
                                <span class="destination-5__item__upper-tittle"><?php echo e($distination->title); ?></span>

                                <img src="<?php echo e(asset('public/images/destination/' . $distination->photo)); ?>" alt="desti51">
                            <?php else: ?>
                                <img src="<?php echo e(asset('public/images/destination/' . $distination->photo)); ?>" alt="desti51">
                                <span class="destination-5__item__below-tittle"><?php echo e($distination->title); ?></span>
                            <?php endif; ?>

                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>


    <section class="question_sec pt-90 pt-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="email_gardener text-center">
                        <div class="section_tit light-color">
                            <h2>Plan your trip now</h2>
                            <span class="three_line"></span>
                        </div>
                        <div class="text_heading mb-30 light-color">
                            <p>
                                Lorem ipsum dolor sit amet, ligula vestibulum nunc dis ipsum, et nam, cras nec lacus
                                amet, ut mauris erat mattis neque a quis. Vivamus donec dolor consectetuer congue.
                            </p>
                        </div>
                        <a href="<?php echo e(route('front.booking')); ?>" class="btn-book">Book now <span class="fa fa-send"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="col-4-tour mb-2">
        <div class="container">
            <div class="col-4-tour__tittle">
                <!-- section tittle -->

                <div class="section-tittle">
                    <h2>Popular Tours</h2>
                    <div class="section-tittle__line-under"></div>
                    <p>Popular <span>Tours</span></p>
                </div>
                <span class="col-4-tour__sub-tittle">Praesent at ante scelerisque, auctor turpis vitae, aliquet nequ
                    Lorem ipsum dolor sit amet consectetur adipisicing.</span>
            </div>
            <div class="row">

                <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-xl-4 col-sm-6 col-12">
                        <a href="<?php echo e(url('tour')); ?>/<?php echo e($trip->slug); ?>" class="trending-tour-item">

                            <img class="trending-tour-item__thumnail"
                                 src="<?php echo e(asset('public/images/trip/' . $trip->photo)); ?>">

                            <div class="trending-tour-item__info">
                                <h3 class="trending-tour-item__name">
                                    <?php echo e($trip->title); ?>

                                </h3>
                                <div class="trending-tour-item__group-infor">
                                    <div class="trending-tour-item__group-infor--left">
                                        <span class="trending-tour-item__group-infor__rating"></span>
                                        <div class="trending-tour-item__group-infor__lasting"><img
                                                    src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/tours/lasting.png"
                                                    alt="lasting"><?php echo e($trip->days); ?> Days / <?php echo e($trip->days-1); ?> Nights
                                        </div>
                                    </div>


                                    <span class="trending-tour-item__group-infor__price"><?php echo e($trip->price); ?></span>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>