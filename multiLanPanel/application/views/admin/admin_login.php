<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/plugins/images/logo1.gif">
    <title>Admin Login</title>
    <link href="asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/animate.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/colors/blue.css" id="theme" rel="stylesheet"> 
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
  
    <div class="row">
    <div class="col-md-8">
        <img src="asset/plugins/images/login-register.jpg"  style="height: 650px" alt="Home" />
    </div>
    <div class="col-md-4">
        <div class="login-box login-sidebar">
            <div class="white-box">
            <?php echo form_open("dashboard",['class'=>'form-horizontal form-material','name'=>'registration_form','id'=>'registration_form'])?>
      <!--           <form class="form-horizontal form-material" id="loginform" action="admin/adminValidation"> -->
                    <a href="javascript:void(0)" class="text-center db"><img src="asset/plugins/images/logo1.gif" alt="Home" style="height: 75px;" />
                        </a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="register2.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div>
               <?php echo form_close(); ?>
                <form class="form-horizontal" id="recoverform" action="https://wrappixel.com/demos/admin-templates/agile-admin/inverse/index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>
  <script src="asset/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="asset/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="asset/asset/js/jquery.slimscroll.js"></script>
    <script src="asset/js/waves.js"></script>
    <script src="asset/js/custom.min.js"></script>
    <script src="asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>