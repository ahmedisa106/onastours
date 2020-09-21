<?php $__env->startSection('title'); ?> <?php echo e(__('tripmodule::trip.pagecategtitle')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo e(adminurl('bower_components/select2/dist/css/select2.min.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(adminurl('treeview.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1> <?php echo e(__('tripmodule::trip.pagecategtitle')); ?> </h1>

</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('tripmodule::trip.pagecategtitle')); ?></h3>
        </div>
        <?php if(count($errors) > 0): ?> <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="alert alert-danger"><?php echo e($item); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
        <!-- /.box-header -->
        <form class="form-horizontal" action="<?php echo e(url('/admin-panel/trip/category/' . $categ->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?> <?php echo e(method_field('PUT')); ?>

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
                            <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane <?php if($loop->first): ?> active <?php endif; ?>" id="<?php echo e($lang->display_lang); ?>">

                                <div class="form-group">
                                    
                                    <label class="control-label col-sm-2" for="title"><?php echo e(__('tripmodule::trip.title')); ?>(<?php echo e($lang->display_lang); ?>) :</label>
                                    <div class="col-sm-8">
                                        <input id="title_<?php echo e($lang->lang); ?>" type="text" autocomplete="off" value="<?php echo e(ValueOf($categ, $lang, 'title')); ?>" class="form-control" placeholder="Write Title" name="<?php echo e($lang->lang); ?>[title]" <?php if($loop->first): ?> required <?php endif; ?>>
                                    </div>
                                </div>

                                <div class="form-group">
                                    
                                    <label class="control-label col-sm-2" for="title"><?php echo e(__('tripmodule::trip.desc')); ?>(<?php echo e($lang->display_lang); ?>) :</label>
                                    <div class="col-sm-8">
                                        <textarea id="editor<?php echo e($lang->id); ?>" name="<?php echo e($lang->lang); ?>[description]" placeholder="Write Description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(ValueOf($categ, $lang, 'description')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->



            <div class="form-group">
                
                <label class="control-label col-sm-2" for="title"><?php echo e(trans('tripmodule::trip.parent')); ?>:</label>
                <div class="col-sm-8">
                    <select class="form-control" name="parent_id">
                            <option value="0"> Parent Category </option>
                                <?php $__currentLoopData = $categs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($cat->id != $categ->id): ?>
                                        <option
                                            <?php if($categ->parent_id != null): ?>
                                                <?php if($cat->id == $categ->parent->id): ?> selected <?php endif; ?>
                                            <?php endif; ?>
                                        value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?>

                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="photo"><?php echo e(__('tripmodule::trip.photo')); ?> :</label>
                <div class="col-sm-4">
                    <input data-validation="required" type="file" autocomplete="off" name="photo">
                    <br> <?php if($categ->cover_photo): ?>
                    <img width="200px" height="80px" src=<?php echo e(asset( "public/images/trip_category/".$categ->photo)); ?>/> <?php else: ?> "
                    <strong>No Photo</strong>" <?php endif; ?>
                </div>
                <label class="control-label col-sm-2" for="imgs"><?php echo e(__('tripmodule::trip.cover')); ?> :</label>
                <div class="col-sm-4">
                    <input type="file" data-validation="required" name="cover_photo" />
                    <br>
                    <?php if($categ->cover_photo): ?>
                        <img src=<?php echo e(asset( "public/images/trip_category/".$categ->cover_photo)); ?> width=100 height=70/>
                    <?php else: ?>
                        "<strong>No Photo</strong>"
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group">
                <div class="box-header">
                    <pre><h4>SEO Columns : </h4></pre>
                </div>
            </div>

            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li <?php if($loop->first): ?> class="active" <?php endif; ?> >
                            <a href="#seo<?php echo e($lang->display_lang); ?>" data-toggle="tab"><?php echo e($lang->display_lang); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <div class="tab-content">
                        <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane <?php if($loop->first): ?> active <?php endif; ?>" id="seo<?php echo e($lang->display_lang); ?>">

                            <div class="form-group">
                                
                                <label class="control-label col-sm-2" for="title"> <?php echo e(__('tripmodule::trip.mt')); ?>(<?php echo e($lang->display_lang); ?>) :</label>
                                <div class="col-sm-8">
                                    <input id="meta_title_<?php echo e($lang->lang); ?>" type="text" autocomplete="off" class="form-control" placeholder="Write information about your title"
                                        name="<?php echo e($lang->lang); ?>[meta_title]" value="<?php echo e(ValueOf($categ, $lang, 'meta_title')); ?>">
                                </div>

                            </div>

                            <div class="form-group">
                                
                                <label class="control-label col-sm-2" for="desc"> <?php echo e(__('tripmodule::trip.md')); ?>(<?php echo e($lang->display_lang); ?>) :</label>
                                <div class="col-sm-8">
                                    <textarea id="meta_desc_<?php echo e($lang->lang); ?>" class="form-control" autocomplete="off" placeholder="Write information about your description" name="<?php echo e($lang->lang); ?>[meta_desc]"
                                        cols="15" rows="2"><?php echo e(ValueOf($categ, $lang, 'meta_desc')); ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                
                                <label class="control-label col-sm-2" for="tags"> <?php echo e(__('tripmodule::trip.tags')); ?>(<?php echo e($lang->display_lang); ?>) :</label>
                                <div class="col-sm-8">
                                    <input id="countKeyWords<?php echo e($lang->lang); ?>" autocomplete="off" type="text" class="form-control" name="<?php echo e($lang->lang); ?>[meta_keywords]" value="<?php echo e(ValueOf($categ, $lang, 'meta_keywords')); ?>">
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="slug">Slug(<?php echo e($lang->display_lang); ?>) : </label>
                                <div class="col-sm-8">
                                    <input id="slug_<?php echo e($lang->lang); ?>" type="text" autocomplete="off" class="form-control" name="<?php echo e($lang->lang); ?>[slug]" value="<?php echo e(ValueOf($categ, $lang, 'slug')); ?>">
                                </div>
                            </div>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <a href="<?php echo e(url('/admin-panel/trip/category')); ?>" type="button" class="btn btn-default"><?php echo e(__('tripmodule::trip.cancel')); ?> &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>

        <button type="submit" class="btn btn-primary pull-right"><?php echo e(__('tripmodule::trip.submit')); ?> &nbsp; <i class="fa fa-save"></i></button>
    </div>
    <!-- /.box-footer -->
    </form>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
<script src="<?php echo e(adminurl('metro.js')); ?>"></script>

<script src="<?php echo e(adminurl('bower_components/speaking-url/speakingurl.min.js')); ?>">
</script>



<?php echo $__env->make('tripmodule::Trip.js', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php echo $__env->make('tripmodule::Trip.copy', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- CK Editor -->
<script src="<?php echo e(adminurl('bower_components/ckeditor/ckeditor.js')); ?>"></script>

<!-- Select2 -->
<script src="<?php echo e(adminurl('bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>

<script>
    //Initialize Select2 Elements
  $('.select2').select2();

</script>

<?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<script>
    $(function () {
    CKEDITOR.replace('editor' + '<?php echo e($lang->id); ?>');
  });

</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>