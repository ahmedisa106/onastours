<?php $__env->startSection('title'); ?> <?php echo e(__('tripmodule::trip.trips')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(adminurl('bower_components/select2/dist/css/select2.min.css')); ?>"> 
    <link rel="stylesheet" href="<?php echo e(adminurl('treeview.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1> <?php echo e(__('tripmodule::trip.trips')); ?> </h1>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('tripmodule::trip.trips')); ?></h3>
            </div>
            <?php if(count($errors) > 0): ?> <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="alert alert-danger"><?php echo e($item); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
        <!-- /.box-header -->
            <form class="form-horizontal" action="<?php echo e(url('/admin-panel/trip')); ?>/<?php echo e($trip->id); ?>" method="POST"
                  enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> <?php echo e(method_field('PUT')); ?>


                <div class="box-body">

                    <div class="col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li <?php if($loop->first): ?> class="active" <?php endif; ?> >
                                        <a href="#<?php echo e($lang->display_lang); ?>"
                                           data-toggle="tab"><?php echo e($lang->display_lang); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="tab-content">
                                <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane <?php if($loop->first): ?> active <?php endif; ?>"
                                         id="<?php echo e($lang->display_lang); ?>">

                                        <div class="form-group">
                                            
                                            <label class="control-label col-sm-2"
                                                   for="title"><?php echo e(__('tripmodule::trip.title')); ?> :</label>
                                            <div class="col-sm-8">
                                                <input id="title_<?php echo e($lang->lang); ?>" type="text" autocomplete="off" class="form-control"
                                                       name="<?php echo e($lang->lang); ?>[title]" <?php if($loop->first): ?> required
                                                       <?php endif; ?> value="<?php echo e(ValueOf($trip, $lang, 'title')); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                            <label class="control-label col-sm-2"
                                                   for="title"><?php echo e(__('tripmodule::trip.desc')); ?>:</label>
                                            <div class="col-sm-8">
                                        <textarea id="desc<?php echo e($lang->id); ?>" name="<?php echo e($lang->lang); ?>[description]"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            <?php echo ValueOf($trip, $lang, 'description'); ?>

                                        </textarea>
                                            </div>
                                        </div>

                                    <!-- <div class="form-group">
                                            
                                        <label class="control-label col-sm-2" for="title"> <?php echo e(__('tripmodule::trip.touroption')); ?>:</label>
                                            <div class="col-sm-8">
                                        <textarea id="tour_option<?php echo e($lang->id); ?>" name="<?php echo e($lang->lang); ?>[tour_option]"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            <?php echo e(ValueOf($trip, $lang, 'tour_option')); ?>

                                        </textarea>
                                            </div>
                                        </div> -->

                                    <!-- <div class="form-group">
                                            
                                        <label class="control-label col-sm-2" for="title"> Tour Vehicles :</label>
                                        <div class="col-sm-8">
                                    <textarea id="tour_vehicles<?php echo e($lang->id); ?>"
                                                  name="<?php echo e($lang->lang); ?>[tour_vehicles]"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            <?php echo e(ValueOf($trip, $lang, 'tour_vehicles')); ?>

                                        </textarea>
                                            </div>
                                        </div> -->


                                        <div class="form-group">
                                            
                                            <label class="control-label col-sm-2"
                                                   for="title"><?php echo e(__('tripmodule::trip.short_desc')); ?>:</label>
                                            <div class="col-sm-8">
                                                <textarea id="shoort_desc<?php echo e($lang->id); ?>"
                                                          name="<?php echo e($lang->lang); ?>[short_desc]"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ValueOf($trip, $lang, 'short_desc'); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                            <label class="control-label col-sm-2"
                                                   for="title"><?php echo e(__('tripmodule::trip.include')); ?>:</label>
                                            <div class="col-sm-8">
                                                <textarea id="include<?php echo e($lang->id); ?>" name="<?php echo e($lang->lang); ?>[include]"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(ValueOf($trip, $lang, 'include')); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                            <label class="control-label col-sm-2"
                                                   for="title"><?php echo e(__('tripmodule::trip.not_include')); ?>:</label>
                                            <div class="col-sm-8">
                                                <textarea id="not_include<?php echo e($lang->id); ?>"
                                                          name="<?php echo e($lang->lang); ?>[not_include]"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(ValueOf($trip, $lang, 'not_include')); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                            <label class="control-label col-sm-2"
                                                   for="title"><?php echo e(__('tripmodule::trip.note')); ?>:</label>
                                            <div class="col-sm-8">
                                                <textarea id="note<?php echo e($lang->id); ?>" name="<?php echo e($lang->lang); ?>[note]"
                                                          style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(ValueOf($trip, $lang, 'note')); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                        <input <?php echo e($trip->price_type == 0 ?'checked' :''); ?> class="price_table" style="margin-left:150px; margin-right: 10px; " type="radio" value="0" name="price_type"><label class=" " for="">price table</label>
                        <input <?php echo e($trip->price_type == 1 ?'checked' :''); ?> class="price_table" style="margin-left:20px; margin-right: 10px; " type="radio" value="1" name="price_type"> <label class=" " for="">price one table</label>


                        <div class="form-group   <?php echo e($trip->price_type == 1 ?'hidden' :''); ?>  pt " id="0">


                            <div class="col-sm-8" style=" margin-left: 220px;">
                                <textarea class=" ckeditor" name="table1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    <?php if($trip->price_type == 0): ?>
                                        <?php echo e($trip->price_table); ?>

                                    <?php else: ?>
                                        <?php echo $__env->make('tripmodule::Trip.price_table', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php endif; ?>


                                </textarea>
                            </div>

                        </div>
                        <div class="form-group  <?php echo e($trip->price_type == 0 ?'hidden' :''); ?>   pt" id="1">


                            <div class="col-sm-8" style=" margin-left: 220px;">
                                <textarea class=" ckeditor" name="table2" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                    <?php if($trip->price_type == 1): ?>
                                        <?php echo e($trip->price_table); ?>


                                    <?php else: ?>
                                        <?php echo $__env->make('tripmodule::Trip.table2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php endif; ?>

                                </textarea>
                            </div>

                        </div>

                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="photo"><?php echo e(__('tripmodule::trip.photo')); ?> :</label>
                            <div class="col-sm-4">
                                <input data-validation="required" type="file" autocomplete="off"
                                       name="photo"> <?php if($trip->photo): ?>
                                    <br>
                                    <img src=<?php echo e(asset( "public/images/trip/thumb/".$trip->photo)); ?>>
                                    <br> <?php else: ?>
                                    <br>
                                    <strong>"No Photo"</strong>
                                    <br> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="cover"><?php echo e(__('tripmodule::trip.cover')); ?> :</label>
                            <div class="col-sm-4">
                                <input data-validation="required" type="file" autocomplete="off"
                                       name="cover"> <?php if($trip->cover): ?>
                                    <br>
                                    <img src=<?php echo e(asset( "public/images/trip/thumb/".$trip->cover)); ?>>
                                    <br> <?php else: ?>
                                    <br>
                                    <strong>"No Photo"</strong>
                                    <br> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <label class="control-label col-sm-2" for="title"><?php echo e(__('tripmodule::trip.price')); ?> :</label>
                            <div class="col-sm-3">
                                <input id="price" type="text" value="<?php echo e($trip->price); ?>" autocomplete="off"
                                       class="form-control" name="price"
                                       required>
                            </div>


                            <label class="control-label col-sm-2" for="title"><?php echo e(__('tripmodule::trip.days')); ?> :</label>
                            <div class="col-sm-3">
                                <input id="days" type="text" value="<?php echo e($trip->days); ?>" autocomplete="off" class="form-control" name="days"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="is_home_page" class="control-label col-sm-2"><?php echo e(__('tripmodule::trip.home_page')); ?></label>
                            <div class="col-md-3">
                                <input type="checkbox" <?php echo e($trip->is_home_page ==1 ? 'checked' :''); ?> name="is_home_page">
                            </div>

                        </div>


                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title"><?php echo e(trans('tripmodule::trip.category')); ?>

                                :</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="categories[]" multiple>
                                    <?php $__currentLoopData = $categs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cat->id); ?>"
                                                <?php if( in_array($cat->id , $trip->categories()->get()->pluck('id')->toArray()) ): ?> selected <?php endif; ?>><?php echo e($cat->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                        </div>


                        

                        
                        
                        
                        
                        
                        
                        
                        

                        
                        <div class="form-group">
                            <br>
                            <label class="control-label col-sm-2" for="title"><?php echo e(trans('tripmodule::trip.destinations')); ?>

                                :</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="destinations[]" multiple="multiple">
                                    <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"
                                                <?php if(in_array($item->id, $selected_categ_ids)): ?> selected <?php endif; ?>><?php echo e($item->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
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
                                            <a href="#seo<?php echo e($lang->display_lang); ?>"
                                               data-toggle="tab"><?php echo e($lang->display_lang); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                                <div class="tab-content">
                                    <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab-pane <?php if($loop->first): ?> active <?php endif; ?>"
                                             id="seo<?php echo e($lang->display_lang); ?>">


                                            <div class="form-group">
                                                
                                                <label class="control-label col-sm-2"
                                                       for="title"> <?php echo e(__('tripmodule::trip.mt')); ?> :</label>
                                                <div class="col-sm-8">
                                                    <input id="meta_title_<?php echo e($lang->lang); ?>" type="text"
                                                           autocomplete="off" class="form-control"
                                                           name="<?php echo e($lang->lang); ?>[meta_title]"
                                                           value="<?php echo e(ValueOf($trip, $lang, 'meta_title')); ?>">
                                                    <span id="titleSpan_<?php echo e($lang->lang); ?>"></span>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                
                                                <label class="control-label col-sm-2"
                                                       for="desc"> <?php echo e(__('tripmodule::trip.md')); ?> :</label>
                                                <div class="col-sm-8">
                                            <textarea id="meta_desc_<?php echo e($lang->lang); ?>" class="form-control" autocomplete="off"
                                                      name="<?php echo e($lang->lang); ?>[meta_desc]" cols="15"
                                                      rows="2"><?php echo e(ValueOf($trip, $lang, 'meta_desc')); ?></textarea>
                                                    <span id="descSpan_<?php echo e($lang->lang); ?>"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                
                                                <label class="control-label col-sm-2" for="tags"> Meta Keywords
                                                    / <?php echo e(__('tripmodule::trip.tags')); ?> :</label>
                                                <div class="col-sm-8">
                                                    <input id="countKeyWords<?php echo e($lang->lang); ?>" autocomplete="off"
                                                           type="text" class="form-control"
                                                           name="<?php echo e($lang->lang); ?>[meta_keywords]"
                                                           value="<?php echo e(ValueOf($trip, $lang, 'meta_keywords')); ?>">
                                                    <span id="tagsSpan"></span>
                                                </div>
                                            </div>

                                            <!-- Slug -->
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="slug">Slug : </label>
                                                <div class="col-sm-8">
                                                    <input id="slug_<?php echo e($lang->lang); ?>" type="text" autocomplete="off" class="form-control"
                                                           name="<?php echo e($lang->lang); ?>[slug]"
                                                           value="<?php echo e(ValueOf($trip, $lang, 'slug')); ?>">
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
                        <a href="<?php echo e(url('/admin-panel/trip')); ?>" type="button"
                           class="btn btn-default"><?php echo e(__('tripmodule::trip.cancel')); ?> &nbsp; <i class="fa fa-remove"
                                                                                               aria-hidden="true"></i>
                        </a>

                        <button type="submit" class="btn btn-primary pull-right"><?php echo e(__('tripmodule::trip.submit')); ?>

                            &nbsp; <i class="fa fa-save"></i></button>
                    </div>
                    <!-- /.box-footer -->
                </div>
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
            CKEDITOR.replace('desc' + "<?php echo e($lang->id); ?>");

            CKEDITOR.replace('include' + "<?php echo e($lang->id); ?>");
            CKEDITOR.replace('not_include' + "<?php echo e($lang->id); ?>");
            // CKEDITOR.replace('tour_vehicles' + '<?php echo e($lang->id); ?>');
            CKEDITOR.replace('shoort_desc' + '<?php echo e($lang->id); ?>');
            // CKEDITOR.replace('tour_option' + '<?php echo e($lang->id); ?>');
            CKEDITOR.replace('note' + '<?php echo e($lang->id); ?>');
        });

    </script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    CKEDITOR.replace('price_table');
</script>

<script>
    $('document').ready(function () {

        $('.price_table').on('click', function () {
            $value = $(this).val();

            $('.pt').hide();

            $('#' + $value).removeClass('hidden');
            $('#' + $value).show();

        })


    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonmodule::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>