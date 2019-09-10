<?php
/**
 * Created by PhpStorm.
 * User: kavin
 * Date: 8/27/2019
 * Time: 10:56 AM
 */
;?>

<html lang = "en">
<head>
    <!-- Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Bootstrap CSS -->
    <link rel = "stylesheet"
          href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin = "anonymous">

    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <title>nie.lk</title>


</head>
<body>
<!--===========navbar================-->
<?php include '/main/headerNav.html';?>

<!--==========footer===============-->
<?php include '/main/footer.html';?>


<!--==========image Slider==================-->
<div id="demo" class="carousel slide" data-ride="carousel" >
    <div class="carousel-caption">
        <h1 class="display-2">NATIONAL INSTITUTE OF EDUCATION</h1>
    </div>

    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner" >
        <div class="carousel-item active">
            <img width="100%" height="80%" src="image/Higher-Education-1l4yj3p.jpg" >
        </div>
        <div class="carousel-item">
            <img width="100%" height="80%" src="image/thumb-1920-872784.jpg" >
        </div>
        <div class="carousel-item">
            <img width="100%" height="80%" src="image/StudyingLifehackerU-zcilzb.jpg" >
        </div>
    </div>


    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>


</body>
</html>
