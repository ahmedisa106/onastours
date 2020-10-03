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
                    <h1>Kontaktieren Sie uns</h1>
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
                        <h5>Kontakt</h5>
                        <form action="<?php echo e(route('front.sendContactEmail')); ?>" method="post">
                            <?php echo csrf_field(); ?>


                            <label>Your name *</label>
                            <input type="text" name="name" required>
                            <label>Email *</label>
                            <input type="text" name="email" required>
                            <label>Telefon *</label>
                            <input type="text" name="phone">
                            <label>Nachricht *</label>
                            <textarea name="message" cols="30" rows="8"></textarea>
                            <input class="footer-form__submit" type="submit" value="Senden">
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="contact-infomation__item contact-infomation__item--padding">
                        <div class=" contact-infomation__info">
                            <h5>Kontakt Information</h5>
                            <p>Bitte füllen Sie das Formular mit Ihren Wünschen und Anliegen aus. Wir werden sie so schnell wie möglich bearbeiten.Vielen Dank .</p>
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

                    </div>
                </div>
            </div>

            
            
            
            
            
            

            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="1012" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=egypt&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net">google maps embed</a></div>
                <style>.mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 1012px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 1012px;
                    }</style>
            </div>
        </div>


    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>