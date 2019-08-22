<?php
    require_once('./phpScript/lumacon.php');
    require_once('./phpScript/main.php');
    $islogged = new main();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/bookcor-122x122.jpg" type="image/x-icon">
        <meta name="description" content="">
        <title>Home</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="scripts/sweetalert2.css">
        <script type="text/javascript" src="scripts/sweetalert2.js"></script>
    </head>

    <body>
        <?php 
        if($islogged->isLoggedIn()){
            include('layout/app.php');
        }else{
    ?>
        <section class="menu cid-r3Z9PAe6Wn" once="menu" id="menu2-e">
            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm bg-color transparent">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
                <div class="menu-logo">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                        <a href="index.php">
                            <img src="assets/images/bookcor-122x122.jpg"   title="" style="height: 3.8rem;">
                        </a>
                    </span>
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.php">Luma</a></span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="docs.php">Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="home.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="https://mobirise.com"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <?php
        }
    ?>
            <section class="engine"><a href="https://mobiri.se/p">site templates free download</a></section>
            <section class="header5 cid-r3Qp0wBqcN mbr-fullscreen mbr-parallax-background" id="header5-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="mbr-white col-md-10">
                            <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>NCCF E-Library Web App</strong></h1>
                            <p class="mbr-text align-center display-5 pb-3 mbr-fonts-style display-4">Welcome to &nbsp;<strong>LUMA,</strong><br>&nbsp;an e-library app, courtsey of Library Unit - NCCF Kano State Chapter</p>
                            <div class="mbr-section-btn align-center"><a class="btn btn-md btn-secondary display-4" href="home.php"><strong>GET STARTED</strong></a></div>
                        </div>
                    </div>
                </div>
            </section>

            <section once="" class="cid-r4G2WgDPox" id="footer6-q">
                <div class="container">
                    <div class="media-container-row align-center mbr-white">
                        <div class="col-12">
                            <p class="mbr-text mb-0 mbr-fonts-style display-7">
                                © Copyright 2018 LUMA - All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <script src="assets/web/assets/jquery/jquery.min.js"></script>
            <script src="assets/popper/popper.min.js"></script>
            <script src="assets/tether/tether.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/smoothscroll/smooth-scroll.js"></script>
            <script src="assets/dropdown/js/script.min.js"></script>
            <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
            <script src="assets/parallax/jarallax.min.js"></script>
            <script src="assets/theme/js/script.js"></script>
            <script type="text/javascript" src="./scripts/logout.js"></script>
    </body>

    </html>