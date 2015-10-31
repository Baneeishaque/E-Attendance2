<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Madin Polytechnic College Students Tracking System">
    <meta name="keywords" content="Madin Polytechnic College, Students tracking system">
    <meta name="author" content="opshaktvl@gmail.com">
    <title>Madin Polytechnic College Students Tracking System</title>


    <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
    <link href="templates/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- PLUGINS CSS -->
    <link href="templates/assets/plugins/icheck/skins/all.css" rel="stylesheet">
    <link href="templates/assets/plugins/datepicker/datepicker.min.css" rel="stylesheet">

    <!-- MAIN CSS (REQUIRED ALL PAGE)-->
    <link href="templates/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="templates/assets/css/style.css" rel="stylesheet">
    <link href="templates/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="tooltips">


<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="wrapper">
    <!-- BEGIN TOP NAV -->
    <div class="top-navbar">
        <div class="top-navbar-inner">

            <!-- Begin Logo brand -->
            <div class="logo-brand">
                <a href="."><img src="templates/assets/img/sentir-logo-primary.png" alt="Madin Polytechnic College Students Tracking System"></a>
            </div><!-- /.logo-brand -->
            <!-- End Logo brand -->

            <div class="top-nav-content no-right-sidebar">

                <!-- Begin button sidebar left toggle -->
                <div class="btn-collapse-sidebar-left">
                    <i class="fa fa-bars"></i>
                </div><!-- /.btn-collapse-sidebar-left -->
                <!-- End button sidebar left toggle -->

                <!-- Begin button nav toggle -->
                <div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
                    <i class="fa fa-plus icon-plus"></i>
                </div><!-- /.btn-collapse-sidebar-right -->
                <!-- End button nav toggle -->


                <!-- Begin user session nav -->
                <ul class="nav-user navbar-right full">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Hi, <strong><?php echo $_SESSION['name']; ?></strong>
                        </a>
                        <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                            <li><a href="index.php?action=logout">Log out</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- End user session nav -->

            </div><!-- /.top-nav-content -->
        </div><!-- /.top-navbar-inner -->
    </div><!-- /.top-navbar -->
    <!-- END TOP NAV -->



    <!-- BEGIN SIDEBAR LEFT -->
    <div class="sidebar-left sidebar-nicescroller">
        <ul class="sidebar-menu">
            <li>
                <a href="index.php?action=logout">
                    <i class="fa fa-sign-out icon-sidebar"></i>
                    Logout
                </a>
            </li>

        </ul>
    </div><!-- /.sidebar-left -->
    <!-- END SIDEBAR LEFT -->