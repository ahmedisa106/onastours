<?php $__env->startSection('title'); ?>
    <?php echo e(trans('configmodule::settings.settings')); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1>
            <?php echo e(trans('configmodule::settings.settings')); ?>
        </h1>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"> <strong><?php echo e($categ->title); ?></strong></h3>
            </div>
            <form class="form-horizontal" action="<?php echo e(url('/admin-panel/config-module/update')); ?>" method="POST"
                  enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                    <div class="box-body">
                        <div class="col-md-9">
                            <div class="">
                                <!-- <ul class="nav nav-tabs">

                                   
                                        <li>
                                            <a href="#<?php echo e($categ->id); ?>" data-toggle="tab"><strong><?php echo e($categ->title); ?></strong></a>
                                        </li>
                                    

                                </ul> -->
                                <div class="tab-content">
                                   
                                        <div class="tab-pane  active" id="<?php echo e($categ->id); ?>">
                                            <div class="nav-tabs-custom">
                                                <ul class="nav nav-tabs">
                                                    <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li <?php if($loop->first): ?> class="active" <?php endif; ?> >
                                                            <a href="#<?php echo e($categ->title); ?><?php echo e($lang->display_lang); ?>" data-toggle="tab"><?php echo e($lang->display_lang); ?></a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>


                                                <div class="tab-content">
                                                    <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                        <div class="tab-pane <?php if($loop->first): ?> active <?php endif; ?>" id="<?php echo e($categ->title); ?><?php echo e($lang->display_lang); ?>">

                                                        <?php $__currentLoopData = $categ->configs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($cat->is_static == 0): ?>
                                                                    <?php if($cat->type == 1): ?>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-2"><?php echo e($cat->translate($lang->lang)->display_name); ?>:</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" autocomplete="off" value="<?php echo e($cat->translate($lang->lang)->value); ?>" class="form-control" name="<?php echo e($lang->lang); ?>[<?php echo e($cat->var); ?>]">
                                                                            </div>
                                                                        </div>
                                                                    <?php elseif($cat->type == 2): ?>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-2" for="img"><?php echo e($cat->translate($lang->lang)->display_name); ?>:</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="file" autocomplete="off" name="<?php echo e($lang->lang); ?>[<?php echo e($cat->var); ?>]">
                                                                            </div>
                                                                            <img src="<?php echo e(asset('images/config')); ?>/<?php echo e($cat->translate($lang->lang)->value); ?>" width="100" height="100">
                                                                        </div>
                                                                    <?php elseif($cat->type == 3): ?>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-2" for="img"><?php echo e($cat->translate($lang->lang)->display_name); ?>:</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea name="<?php echo e($lang->lang); ?>[<?php echo e($cat->var); ?>]" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($cat->translate($lang->lang)->value); ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>
                                                <!-- /.tab-content -->
                                            </div>
                                            <?php $__currentLoopData = $categ->configs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($cat->is_static == 1): ?>
                                                <?php if($cat->type == 1): ?>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2"><?php echo e($cat->display_name); ?>:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" autocomplete="off" value="<?php echo e($cat->static_value); ?>" class="form-control" name="<?php echo e($cat->var); ?>">
                                                        </div>
                                                    </div>
                                                <?php elseif($cat->type == 2): ?>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="img"><?php echo e($cat->display_name); ?>:</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" autocomplete="off" name="<?php echo e($cat->var); ?>">
                                                        </div>
                                                        <img src="<?php echo e(asset('images/config')); ?>/<?php echo e($cat->static_value); ?>" width="100" height="100">
                                                    </div>
                                                <?php elseif($cat->type == 3): ?>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="img"><?php echo e($cat->display_name); ?>:</label>
                                                        <div class="col-sm-9">
                                                            <textarea name="<?php echo e($cat->var); ?>" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($cat->static_value); ?></textarea>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                   
                                </div>
                            </div>

                        </div>


                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">
                        <?php echo e(trans('configmodule::settings.update')); ?> &nbsp;
                        <i class="fa fa-save"></i>
                    </button>
                </div>
            </form>
        </div>

        </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

    <?php echo $__env->make('commonmodule::includes.swal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>