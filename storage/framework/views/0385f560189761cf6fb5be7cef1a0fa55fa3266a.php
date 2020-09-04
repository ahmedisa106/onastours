<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>  Login </title>
    <link rel="stylesheet" href="<?php echo e(adminurl('login')); ?>/css/bootstrap.min.css"  id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo e(adminurl('login')); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo e(adminurl('login')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(adminurl('custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(adminurl('login')); ?>/css/hover-min.css">
</head>
<body>
<header>Welcome to  Tour Admin Panel</header>
<div class="container h-100" >
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">

                <div class="brand_logo_container website_logo_div">
                    <!--<img class="text-logo website_logo" src="<?php echo e(asset('public/assets/admin/logo.jpg')); ?>">-->
                                        <P style="margin-top:55px;font-size:30px">ICE TOUR</p>

                </div>

            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="post" action="<?php echo e(url('admin-panel/login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control input_user" value="" placeholder="email">
                    </div>
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input_pass"  placeholder="password">
                    </div>

                    <div class="d-flex justify-content-center mt-3 mb--3 login_container">
                        <button type="submit"  class="btn login_btn ">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<footer>© 2019 ICE TOUR. All rights reserved.</footer>

<script src="<?php echo e(adminurl('login')); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo e(adminurl('login')); ?>/js/bootstrap.min.js"></script>

</body>
</html>