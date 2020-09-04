<?php $__env->startSection('content'); ?>

<section>
    <div class="page-banner">
        <div class="container">
            <div class="page-banner__tittle">
                <h1>All Tours</h1>
            </div>
        </div>
    </div>
</section>


<section class="grid-left-sidebar">
    <div class="container">
        <div class="row">
  


            
                      
<div class="col-xl-12">
    <div class="grid-left-sidebar__filter">
        <span class="grid-left-sidebar__filter--result"><?php echo e($trips->count()); ?> tours Found</span>
        <div class="grid-left-sidebar__filter--mode">
            <div class=" custom-select">
                <select>
                    <option value="0">Default Sorting</option>
                    <option value="SanFrancisco">Alphabet</option>
                    <option value="NewYork">Price: Low to high</option>
                    <option value="California">Price: Hight to low</option>
                </select>
            </div>
            <div class=" grid-left-sidebar__filter--mode--sort">
                <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/tours/sort-mode-list.png" alt="sort-mode-list">
            </div>
            <div class=" grid-left-sidebar__filter--mode--sort">
                <img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/tours/sort-mode-grid.png" alt="sort-mode-grid">
            </div>
        </div>
    </div>

    <div class="row">

    <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 col-xl-3 col-sm-6 col-md-12">
            <a href="" class="trending-tour-item">
               
                <img class="trending-tour-item__thumnail" src="<?php echo e(asset('public/images/trip/' . $trip->photo)); ?>" alt="tour1">
                <div class="trending-tour-item__info">
                    <h3 class="trending-tour-item__name">
                       <?php echo e($trip->title); ?> 
                    </h3>
                    <div class="trending-tour-item__group-infor">
                        <div class="trending-tour-item__group-infor--left">
                            <span class="trending-tour-item__group-infor__rating"></span>
                            <div class="trending-tour-item__group-infor__lasting"><img src="<?php echo e(url('/')); ?>/public/assets/front/assets/images/tours/lasting.png" alt="lasting"> 5 Days / 4 Nights</div>
                        </div>

                      
                        <span class="trending-tour-item__group-infor__price">$<?php echo e($trip->price); ?></span>
        
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