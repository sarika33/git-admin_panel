<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/plugins/images/logo1.gif">
    <title>Admin-Dashboard</title>
    <link href="asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="asset/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="asset/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="asset/css/animate.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/colors/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                           <img src="asset/plugins/images/logo1.gif" alt="Home" style="height: 75px; margin-left: 70px " /> 
                           
                       </a>
                   </div>
                   <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="mega-dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Admin</span> <i class="icon-options-vertical"></i></a>
                    </li>
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                </ul>
            </div>
            
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="asset/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sarika Chaudhari <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                    </div>
                </li>
                <li class="nav-small-cap m-t-10">--Menu</li>
                <li><a href="dashboard1" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>
                <li>
                  <li><a href="user1" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon=")"></i> <span class="hide-menu">Users</span></a></li>
                  <li>
                   <li>
                      <li><a href="service1" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe00b;"></i> <span class="hide-menu">Services</span></a></li>
                      <li>
                          <li>
                              <li><a href="blog1" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe008;"></i> <span class="hide-menu">Blogs</span></a></li>
                              <li>
                                <li><a href="logout" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log Out</span></a></li>
                                <li>
                                </ul>
                            </div>
                        </div>
                        <div id="page-wrapper">
                            <div class="container-fluid">
                                <div class="row bg-title">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>