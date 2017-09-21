<?php
require_once 'class/application.php';
$obj_app=new Application();
$result = $obj_app->show_image();

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Borano - Photography / Portfolio Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="asset/img/favicon.png">
    <!-- plugins' css -->
    <link rel="stylesheet" href="asset/css/plugins.css">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300%7cPoppins:400,300,500,700,600' rel='stylesheet' type='text/css'>
    <!-- main css file -->
    <link rel="stylesheet" href="asset/css/main.css">
    <!-- modernizr -->
    <script src="asset/js/lib/modernizr-2.6.2.min.js"></script>
</head>

<body >
<!-- MAIN_WRAPPER -->
<div class="main-wrapper animsition" >

    <!-- HEADER -->
    <header id="header">
        <!-- LOGO -->
        <a href="index.php" class="logo animated ">
            <img src="asset/img/logo.png" class="logo-dark" alt="">
            <img src="asset/img/logo-light.png" class="logo-light" alt="">
        </a>
        <!-- MOBILE MENU ICON -->
        <a href="#" class="mob-menu"><i class="fa fa-bars"></i></a>
        <!-- MENU -->
        <nav>
            <ul class="main-menu">
                <li>
                    <a href="index.html"></a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- /HEADER -->

    <!-- GALLERY -->
    <div class="container-fluid" >
        <div class="grid gallery" data-gutter="3" data-columns="5">
            <?php while($row=mysqli_fetch_assoc($result)){?>
            <div class="grid-item">
                <a href="<?php echo $row['image']?>" data-background="<?php echo $row['image']?>" data-rel="lightcase:gal" title="Image Caption"></a>
            </div>
            <?php }?>

        </div>
    </div>
    <!-- /GALLERY -->

    <!-- FOOTER -->
    <footer id="footer">

        <!-- FOOTER LINKS -->
        <div class="footer-links">
            &copy; <?php echo date('Y')?> Renata Limited. All Rights Reserved. Designed and Developed by Appinion BD Limited. |
        </div>

    </footer>
    <!-- /FOOTER -->

</div>
<!-- /MAIN-WRAPPER -->

<!-- js -->
<script src="asset/js/lib/jquery.min.js"></script>
<script src="asset/js/lib/scripts.js"></script>
<!-- main js -->
<script src="asset/js/main.js"></script>

</body>
</html>