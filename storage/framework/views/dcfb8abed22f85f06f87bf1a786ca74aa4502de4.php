<?php $__env->startSection('title'); ?>
 <?php echo e(__('widgetsmodule::widgets.monialpagetitle')); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo e(adminurl('bower_components/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
<section class="content-header">
  <h1> <?php echo e(__('widgetsmodule::widgets.monialpagetitle')); ?> </h1>

</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?php echo e(__('widgetsmodule::widgets.monialpagetitle')); ?></h3>
    </div>
    <?php if(count($errors) > 0): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="alert alert-danger"><?php echo e($item); ?></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!-- /.box-header -->
    <form class="form-horizontal" action="<?php echo e(url('admin-panel/widgets/testimonials')); ?>" method="POST" enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>

      <div class="box-body">

        <div class="col-md-12">
          <div class="form-group">
            
            <label class="control-label col-sm-2" for="title"><?php echo e(__('widgetsmodule::widgets.name')); ?> :</label>
            <div class="col-sm-8">
              <input type="text" autocomplete="off" class="form-control"
                name="name" required>
            </div>
          </div>

          <div class="form-group">
            
            <label class="control-label col-sm-2" for="title"><?php echo e(__('widgetsmodule::widgets.job_title')); ?> :</label>
            <div class="col-sm-8">
              <input type="text" autocomplete="off" class="form-control" name="job_title" required>
            </div>
          </div>

          <div class="form-group">
            
            <label class="control-label col-sm-2" for="title"><?php echo e(__('widgetsmodule::widgets.quote')); ?> :</label>
            <div class="col-sm-8">
              <textarea id="editor1" name="quote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
          </div>

        </div>
        <br> 
        <div class="form-group">
          <label class="control-label col-sm-2" for="img"><?php echo e(__('widgetsmodule::widgets.photo')); ?> :</label>
          <div class="col-sm-8">
            <input type="file" autocomplete="off" name="photo">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo e(url('admin-panel/widgets/testimonials')); ?>" type="button" class="btn btn-default"><?php echo e(__('widgetsmodule::widgets.cancel')); ?> &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right"><?php echo e(__('widgetsmodule::widgets.submit')); ?> &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<!-- CK Editor -->
<script src="<?php echo e(adminurl('bower_components/ckeditor/ckeditor.js')); ?>"></script>

<?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<script>
  $(function () {
    CKEDITOR.replace('editor' + <?php echo e($lang->id); ?>);
  });

</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>