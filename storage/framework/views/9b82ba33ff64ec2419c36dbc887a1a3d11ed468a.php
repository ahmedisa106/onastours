<?php $__env->startSection('title'); ?>
  <?php echo e(__('widgetsmodule::widgets.sliderpagetitle')); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
  <!-- Select2 -->

  <link rel="stylesheet" href="<?php echo e(adminurl('bower_components/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1> <?php echo e(__('widgetsmodule::widgets.sliderpagetitle')); ?> </h1>

</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?php echo e(__('widgetsmodule::widgets.sliderpagetitle')); ?></h3>
    </div>
    <?php if(count($errors) > 0): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="alert alert-danger"><?php echo e($item); ?></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!-- /.box-header -->
    <form class="form-horizontal" action="<?php echo e(url('admin-panel/widgets/slider')); ?>" method="POST" enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>

      <div class="box-body">

        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li <?php if($loop->first): ?> class="active" <?php endif; ?> >
                <a href="#<?php echo e($lang->display_lang); ?>" data-toggle="tab"><?php echo e($lang->display_lang); ?></a>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

            <div class="tab-content">
              <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="tab-pane <?php if($loop->first): ?> active <?php endif; ?>" id="<?php echo e($lang->display_lang); ?>">
                <div class="form-group">
                  
                  <label class="control-label col-sm-2" for="title"><?php echo e(__('widgetsmodule::widgets.title')); ?> (<?php echo e($lang->display_lang); ?>):</label>
                  <div class="col-sm-8">
                    <input data-validation="length alphanumeric" data-validation-length="min4" type="text" autocomplete="off" class="form-control"
                     name="<?php echo e($lang->lang); ?>[title]" data-validation="alphanumeric" <?php if($loop->first): ?> required <?php endif; ?>>
                  </div>
                </div>

                <div class="form-group">
                  
                  <label class="control-label col-sm-2" for="title"><?php echo e(__('widgetsmodule::widgets.desc')); ?> (<?php echo e($lang->display_lang); ?>):</label>
                  <div class="col-sm-8">
                    <textarea id="editor<?php echo e($lang->id); ?>" name="<?php echo e($lang->lang); ?>[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        
        <div class="form-group">
          <label class="control-label col-sm-2" for="img"><?php echo e(__('widgetsmodule::widgets.photo')); ?>:</label>
          <div class="col-sm-8">
            <input data-validation="required" type="file" autocomplete="off" name="photo">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo e(url('/admin-panel/widgets/slider')); ?>" type="button" class="btn btn-default"><?php echo e(__('widgetsmodule::widgets.cancel')); ?> &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right"><?php echo e(__('widgetsmodule::widgets.submit')); ?> &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<!-- CK Editor -->
<script src="<?php echo e(adminurl('bower_components/ckeditor/ckeditor.js')); ?>"></script>

<?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<script>
  $(function () {
    CKEDITOR.replace('editor' + '<?php echo e($lang->id); ?>');
  });

</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>