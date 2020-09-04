<?php $__env->startSection('header'); ?>
    <meta name="title" content="<?php echo e($config['meta_title']); ?>">
    <meta name="description" content="<?php echo e($config['meta_desc']); ?>">
    <meta name="keywords" content="<?php echo e($config['meta_keywords']); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section>
        <div class="slider-banner-2">
            <div class="slider-banner-2__item">
                <div class="wand-container">
                    <div class="slider-banner-2__item__text animated zoomInUp">
                        <span>Discover the magic of</span><span class="slider-banner-2__item__text__line"></span>
                        <h1>Mount Kilija</h1>
                        <a href="#">VIEW TOUR <img
                                src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/slider/viewArrow.png"
                                alt="viewtourArrow"> </a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="container clearfix common-pad-inner booknow">
        <div class="sec-header">
            <h2>Booking</h2>
            <h3>Lorem ipsum dolor sit amet, ligula vestibulum nunc</h3>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
                <div class="book-left-content input_form">
                    <form id="contactBooking" action="<?php echo e(route('front.book')); ?>" method="post">

                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="trip_id" value="<?php echo e($tour->id); ?>">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Anrede</label>
                                <div class="right-sidebar__item__form--date">

                                    <select class="form-control col-lg-12" name="gender" id="">
                                        <option value="0">Herr</option>
                                        <option value="1">frau</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Name</label>
                                <div>

                                    <input type="text" name="name" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Ankuftsdatum</label>
                                <div class="right-sidebar__item__form--date">
                                    <span class="far fa-calendar-alt"></span>
                                    <input  name="arrival_date" type="text" data-select="datepicker"
                                           autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Abreisedatum</label>
                                <div class="right-sidebar__item__form--date">
                                    <span class="far fa-calendar-alt"></span>
                                    <input  name="departure_date" type="text" data-select="datepicker"
                                           autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">


                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <label for="">Erwachsene</label>
                                        <input type="text" name="adult_number" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="">Kinder</label>
                                        <input type="text"  name="kids_number" class="form-control">
                                    </div>

                                </div>







                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Email</label>
                                <input id="De-place" type="email" name="email" placeholder="" class="form-control">
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Vorwahl</label>
                                <div class="right-sidebar__item__form--date">

                                    <input type="text" class="form-control" name="abbr" placeholder="+02">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <label>Telefon</label>
                                <div>

                                    <input type="text" name="mobile" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 m0 col-xs-12">
                            <label>Ihre Nachicht</label>
                            <div>

                                <textarea class="form-control"  name="note" autocomplete="off"></textarea>
                            </div>
                        </div>
                        <br>



                        <div class="col-lg-5">

                            <label for="" style="background-color: #70CBF4; font-size: 25px; text-align: center; color: white"><?php echo e($index = getName('4')); ?></label>

                            <input type="text" name="captcha" placeholder="Bitt den Code eingeben"  class="form-control">
                            <input type="hidden" name="valid_captcha" value="<?php echo e($index); ?>">

                        </div>

                        <hr style="background-color: #70CBF4">

                        <input type="submit" class="form-control col-lg-6 col-md-6" style="background-color: #70CBF4 ; color: white ;font-size: 25px;" value="Anfrag schicken">





                    </form>
                </div>
            </div>
            <div class="col-sm-4 pull-right">
                <div class="right-sidebar__item__contact">
                    <h5>Get a Question?</h5>
                    <p>Do not hesitate to give us a call. We are an expert team and we happy to talk to you.</p>
                    <a href="#"><img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/sidebar/phone.png" alt="phone"><span
                            class="contact-phone"><?php echo e($config['phone']); ?> </span></a>
                    <a href="#"><img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/sidebar/mail.png"
                                     alt="mail"><span><?php echo e($config['email']); ?> </span></a>
                </div>
            </div>
        </div>
    </section>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>