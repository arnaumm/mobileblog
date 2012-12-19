<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Mobile blog</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

    <script>
        $(function(){
            $('#mobile-slider').carousel();
        });
    </script>

</head>
<body>

<div class="container">

<h2>Mobile Games Blog</h2>

    <div id="mobile-slider" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item"><img src="/ci_mobile/assets/img/960x300-1.png" alt=""></div>
            <div class="item"><img src="/ci_mobile/assets/img/960x300-2.png" alt=""></div>
            <div class="item"><img src="/ci_mobile/assets/img/960x300-3.jpg" alt=""></div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#mobile-slider" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#mobile-slider" data-slide="next">&rsaquo;</a>
    </div>
