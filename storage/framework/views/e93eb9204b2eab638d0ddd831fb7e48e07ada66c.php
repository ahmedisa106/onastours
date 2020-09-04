<?php $__env->startSection('content'); ?>



<section>
    <div class="page-banner">
        <div class="container">
            <div class="page-banner__tittle">
                <h1>Destinations </h1>
                <p> <span></span> </p>
            </div>
        </div>
    </div>
</section>

<section class="destination-grid-layout">
    <div class="container">
        <div class="row">
           <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(route('front.destinationItem',$distination->slug)); ?>" class="top-desti__item">
                    <img src="<?php echo e(asset('public/images/destination/' . $distination->photo)); ?>" alt="desti1">
                    <div class="top-desti__ammout">
                        <span><i class="fa fa-map-marker"></i><?php echo e($distination->title); ?></span>
                        <span>38 Tours</span>
                    </div>
                </a>
            </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        
          
        </div> 
        
        <!-- pagination -->
 <!-- <div class="wander-pagination__pagination">
    <div class="wander-pagination__pagination__paging current">1</div>
    <div class="wander-pagination__pagination__paging">2</div>
    <div class="wander-pagination__pagination__paging">3</div>
    <div class="wander-pagination__pagination__paging"><i class="fa fa-angle-right"></i></div>
</div>    -->
    </div>
 
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>