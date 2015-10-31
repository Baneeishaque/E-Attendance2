<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cybin">
    <title>Login | Ma'din Polytechnic College - Student Tracking System</title>

    <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/icheck/skins/all.css" rel="stylesheet">

    <!-- MAIN CSS (REQUIRED ALL PAGE)-->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login tooltips">

<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="login-header text-center">
    <img src="assets/img/logo-login.png" class="logo" alt="Logo">
</div>
<div class="login-wrapper">

    <!--show messages if available-->
    <?php if(isset($_GET['msg']))
    {
        echo"<div class='alert alert-warning alert-bold-border fade in alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$_GET['msg']."</div>";
    }
    ?>

    <!--Login Form-->
    <form role="form" action="../index.php?action=login" method="post">
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="text" class="form-control no-border input-lg rounded" placeholder="Enter Admission No" name="admission_no" autofocus value="">
            <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="text" class="form-control no-border input-lg rounded" placeholder="Enter Date of birth dd/mm/yyyy" name="dob" value="">
            <span class="fa fa-unlock-alt form-control-feedback"></span>
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-warning btn-lg btn-perspective btn-block">LOGIN</button>
        </div>
    </form>
</div><!-- /.login-wrapper -->
<!--
===========================================================
END PAGE
===========================================================
-->

<!--
===========================================================
Placed at the end of the document so the pages load faster
===========================================================
-->
<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/retina/retina.min.js"></script>
<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>

<!-- MAIN APPS JS -->
<script src="assets/js/apps.js"></script>

</body>

</html>