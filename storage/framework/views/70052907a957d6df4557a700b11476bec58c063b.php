<!-- jQuery 3 -->
<script src="<?php echo e(adminurl('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(adminurl('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(adminurl('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(adminurl('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(adminurl('dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(adminurl('dist/js/demo.js')); ?>"></script>

<script src="<?php echo e(asset('assets/admin/plugins/ckeditor/ckeditor.js')); ?>"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>




<?php echo $__env->yieldContent('javascript'); ?>
