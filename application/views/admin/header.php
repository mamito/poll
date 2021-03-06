<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Voker</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo base_url();?>media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo base_url();?>media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>media/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>media/css/login.css" rel="stylesheet" type="text/css"/>


    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/select2_metro.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>media/css/DT_bootstrap.css" />
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="<?php echo base_url();?>media/image/favicon.ico" />
    <script src="<?php echo base_url();?>media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->

    <script src="<?php echo base_url();?>media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="<?php echo base_url();?>media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>media/js/bootstrap.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>media/js/excanvas.min.js"></script>
    <script src="<?php echo base_url();?>media/js/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>media/js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>media/js/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>media/js/jquery.uniform.min.js" type="text/javascript" ></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="<?php echo base_url();?>media/js/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>media/js/DT_bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.twbsPagination.js"></script>

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>media/js/app.js"></script>
    <script src="<?php echo base_url();?>media/js/table-editable.js"></script>
    <script src="<?php echo base_url();?>media/js/bootstrap-modal.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>media/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>media/js/ui-modals.js"></script>
    <script src="<?php echo base_url();?>media/js/form-samples.js"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url();?>media/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>media/js/app.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>media/js/login.js" type="text/javascript"></script>
</head>

<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-fixed page-footer-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <h4 style="color:white;float: left;">Voker System</h4>
            <!-- END LOGO -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav pull-right">

                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="username"><?php echo $username;?></span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>admin/vokemaker/logout"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>

    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
        FormSamples.init();
    });
</script>
