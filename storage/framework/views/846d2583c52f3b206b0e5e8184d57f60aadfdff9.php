
<script src="<?php echo e(adminurl('plugins/sweetalert/sweetalert.min.js')); ?>"></script>

<?php if(session('success')): ?>
    <script>
        swal("<?php echo e(__('commonmodule::swal.good')); ?>", "<?php echo e(__('commonmodule::swal.saved')); ?>", "success", { button: "<?php echo e(__('commonmodule::swal.btn')); ?>", });
    </script>
<?php endif; ?>

<?php if(session('updated')): ?>
    <script>
        swal("<?php echo e(__('commonmodule::swal.good')); ?>", "<?php echo e(__('commonmodule::swal.edited')); ?>", "success", { button: "<?php echo e(__('commonmodule::swal.btn')); ?>", });
    </script>
<?php endif; ?>
