<header id="header-4">
    <div class="header-4-upper">
        <div class="wand-container">
            <span class="header-4-upper__contact-area">
                <a class="header-4-upper__contact" href="#">
                    <img src="<?php echo e(url('assets/front')); ?>/assets/images/mailcontact.png" alt="mailcontact">
                    wunderlust@support.com
                </a>
                <a class="header-4-upper__contact" href="#">
                    <img src="<?php echo e(url('assets/front')); ?>/assets/images/header4phone.png" alt="phone">
                    +053 569 7810
                </a>
            </span>

            
               
			   
            

            <span class="header-4-upper__social">
                <a href="#"><img src="<?php echo e(url('assets/front')); ?>/assets/images/header4upperIns.png" alt="header4ins"></a>
                <a href="#"><img src="<?php echo e(url('assets/front')); ?>/assets/images/header4face.png" alt="face"></a>
                <a href="#"><img src="<?php echo e(url('assets/front')); ?>/assets/images/header4twitter.png" alt="twitter"></a>
            </span>
        </div>
    </div>


    <div class="wand-container">
        <div class="header-content2--style2">
            <div class="header-content2__logo">
                <a class="header-content2__logo__sitename" href="<?php echo e(url('')); ?>">
                    <img src="<?php echo e(url('assets/front')); ?>/assets/images/logo.png" alt="logo"></a>
            </div>

            <nav class="header-2-nav">
                <span class="header-4-upper__contact-area-mobile">
                    <a class="header-4-upper__contact" href="#">
                        <img src="<?php echo e(url('assets/front')); ?>/assets/images/mailcontact.png" alt="mailcontact">
                        wanderlust@support.com
                    </a>
                    <a class="header-4-upper__contact" href="#">
                        <img src="<?php echo e(url('assets/front')); ?>/assets/images/header4phone.png" alt="phone">
                        +053 569 7810
                    </a>
                </span>
                <ul>
                    <li>
                        <a href="">HOME </a>
                    </li>
                    <?php $__currentLoopData = $tripcategs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(url('category')); ?>/<?php echo e($item->slug); ?>"><?php echo e($item->title); ?> </a>
                            <ul class="sub-menu">
                                <?php $__currentLoopData = $item->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(url('category')); ?>/<?php echo e($item->slug); ?>">
                                            <?php echo e($item->title); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('front.contact')); ?>">Kantakt</a></li>
                    <li class="plan-trip">
                        <a href="<?php echo e(route('front.booking')); ?>" class="btn-book">Plan your trip<span class="fa fa-send"></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="search-area">
                <div class="search-area__close"></div>
                <form action="#">
                    <input class="search-area__input" placeholder="Search..." type="text">
                    <button class="search-area__submit" type="submit">
                        <span>Hit Enter to search or Esc key to close</span></button>
                </form>
            </div>
            <nav class="header-nav-mobile">
                <ul>
                    <li>
                        <a href="">HOME </a>
                    </li>
                    <?php $__currentLoopData = $tripcategs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(url('category')); ?>/<?php echo e($item->slug); ?>"><?php echo e($item->title); ?> </a>
                            <ul class="sub-menu">
                                <?php $__currentLoopData = $item->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(url('category')); ?>/<?php echo e($item->slug); ?>">
                                            <?php echo e($item->title); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('front.contact')); ?>">Kantakt</a></li>
                    <li class="plan-trip">
                        <a href="<?php echo e(route('front.booking')); ?>" class="btn-book">Plan your trip<span class="fa fa-send"></span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header-content2__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>