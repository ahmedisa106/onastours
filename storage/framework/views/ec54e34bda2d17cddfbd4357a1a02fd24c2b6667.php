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
                    <h1>Contact Us</h1>
                    <p><span></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-infomation">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-infomation__item contact-infomation__form">
                        <h5>Get in Touch</h5>
                        <form action="#">
                            <label>Your name *</label>
                            <input type="text" name="name">
                            <label>Email *</label>
                            <input type="text" name="email">
                            <label>Message *</label>
                            <textarea name="message" cols="30" rows="8"></textarea>
                            <input class="footer-form__submit" type="submit" value="SUBCRIBE">
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="contact-infomation__item contact-infomation__item--padding">
                        <div class=" contact-infomation__info">
                            <h5>Contact Information</h5>
                            <p>Cras ut varius magna. Morbi sed orci id sapien ultricies malesu. Lorem ipsum dolor sit,
                                amet consectetur adipisicing elit. Dicta veritatis soluta, earum doloremque eius
                                consectetur, facere nostrum fugit nam consequuntur quisquam tempore eos! Quisquam,
                                accusamus.</p>
                            <div class="contact-infomation__info__address">
                                <div class="contact-infomation__info__address-item">
                                    <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/contact-addresst.png"
                                         alt="contact-addresst">
                                    <span>Hemlock St, Broklyn, NY 1802, USA</span>
                                </div>
                                <div class="contact-infomation__info__address-item">
                                    <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/contact-mail.png"
                                         alt="contact-mail">
                                    <span><?php echo e($config['email']); ?></span>
                                </div>
                                <div class="contact-infomation__info__address-item">
                                    <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/contact-phone.png"
                                         alt="contact-phone">
                                    <span><?php echo e($config['phone']); ?> </span>
                                </div>
                            </div>
                        </div>
                        <div class="contact-infomation__working-time">
                            <h5>Working Hours</h5>
                            <p>Monday - Saturday: 8.am - 6.pm</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-infomation__map">
                <i class="fas fa-map-marker-alt"></i>
                <iframe
                    src="https://maps.google.com/maps?q=New%20york&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed">
                </iframe>
            </div>
        </div>


    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>