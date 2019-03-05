<?php 
include 'system/inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL;?>include/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL;?>include/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL;?>include/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo URL;?>include/css/summernote.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL;?>include/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL;?>include/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet" type="text/css">


    <script src="<?php echo URL;?>include/js/jquery.min.js"></script>
    <script src="<?php echo URL;?>include/js/bootstrap.min.js"></script>
    <script src="<?php echo URL;?>include/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo URL;?>include/js/summernote.js"></script>
    <script src="<?php echo URL;?>include/js/sb-admin-2.js"></script>
    <script src="<?php echo URL;?>include/js/js.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Saferoad</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo AURL;?>/cixis"><i class="fa fa-sign-out fa-fw"></i> Çıxış</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo AURL?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       <li>    
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Səhifələr <span class="fa arrow"></fa></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo AURL?>/Main">Ana Səhifə</a>
                                </li>
                                <li>
                                    <a href="<?php echo AURL?>/Services">Xidmətlər</a>
                                </li>
                                <li>
                                    <a href="<?php echo AURL?>/vakansiya">Vakansiya</a>
                                </li>
                                <li>
                                    <a href="<?php echo AURL?>/joinus">Bizə Qoşul </a>
                                </li>
                                <li>
                                    <a href="<?php echo AURL?>/contact">Bizimlə Əlaqə</a>
                                </li>
                                <li>
                                    <a href="<?php echo AURL?>/about">Haqqımızda</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Gələnlər<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo AURL?>/Order">Sifarişlər</a>
                                </li>
                                <li>
                                    <a href="<?php echo AURL?>/inboxContact">Contact Mesajlar</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="<?php echo AURL.'/Galery';?>"><i class="fa fa-photo"></i> Galery</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Tənzimləmələr</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">