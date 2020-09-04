<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo e(adminurl('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">

<?php if(App::getLocale() == 'ar'): ?>
    <link rel="stylesheet" media="screen" href="<?php echo e(adminurl('rtl/droid-arabic-kufi.css')); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(adminurl('rtl/bootstrap-rtl.min.css')); ?>">
<?php endif; ?>
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(adminurl('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo e(adminurl('bower_components/Ionicons/css/ionicons.min.css')); ?>">

<?php echo $__env->yieldContent('css'); ?>


<!-- Theme style -->
<link rel="stylesheet" href="<?php echo e(adminurl('dist/css/AdminLTE.min.css')); ?>">

<?php if(App::getLocale() == 'ar'): ?>
    <link rel="stylesheet" href="<?php echo e(adminurl('rtl/AdminLTE-rtl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(adminurl('rtl/_all-skins-rtl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(adminurl('rtl/custom-rtl.css')); ?>">
<?php else: ?>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(adminurl('dist/css/skins/skin-blue-light.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(adminurl('dist/css/custom.css')); ?>">

<?php endif; ?>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
