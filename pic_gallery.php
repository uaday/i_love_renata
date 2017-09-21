<?php


require_once 'class/application.php';
$obj_app=new Application();
$result = $obj_app->show_image();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" async="async"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I ♥ RENATA</title>

    <style>
        div.gallery {
            border: 0px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 0px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 500px){
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px){
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        h1 {
            font-size: 72px;
            background: -webkit-linear-gradient(#eee, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    </style>





</head>
<body >
<div class="col-md-12">
    <a style="text-decoration: none;background: black" href="index.php"><h2 align="center" class="display-3 animated rubberBand " >I LOVE RENATA</h2></a>
</div>
<div class="col-md-12">

    <?php while($row=mysqli_fetch_assoc($result)){?>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank"  href="<?php echo $row['image']?>">
                <img src="<?php echo $row['image']?>" alt="image" width="50" height="50">
            </a>
        </div>
    </div>
    <?php }?>
</div>
</body>
</html>