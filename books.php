<?php
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
        <meta name="description" content="Site Builder Description">
        <title>books</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
        <script type="text/javascript" src="scripts/jquery.js"></script>
        <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.24.0/babel.js"></script>
        <script type="text/javascript" src="scripts/readbooks.js"></script>

    </head>

    <body>
        <?php
    include('layout/app.php');
   ?>
            <section class="engine"><a href="https://mobiri.se/g">how to build your own site for free</a></section>
            <section class="features16 cid-r4GnfJlnlP mbr-parallax-background" id="features16-r">



                <div class="container align-center">
                    <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
                        Hi,
                        <?php 
				echo "Mr.". $islogged->fetchData('name');
            ?>
                    </h2>
                    <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-4">
                        Welcome to <strong>LUMA Bookshelf</strong>, click to read any book for free!</h3>
                    <div class="row" id="root" style="width:100%; padding:1em;">

                    </div>
                </div>
            </section>

            <!-- <section once="" class="cid-r4G2JWWimO" id="footer6-p">

<div class="container">
    <div class="media-container-row align-center mbr-white">
        <div class="col-12">
            <p class="mbr-text mb-0 mbr-fonts-style display-7">
                © Copyright 2018 LUMA - All Rights Reserved
            </p>
        </div>
    </div>
</div>
</section> -->

            <script src="assets/web/assets/jquery/jquery.min.js"></script>
            <script src="assets/popper/popper.min.js"></script>
            <script src="assets/tether/tether.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/dropdown/js/script.min.js"></script>
            <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
            <script src="assets/parallax/jarallax.min.js"></script>
            <script src="assets/smoothscroll/smooth-scroll.js"></script>
            <script src="assets/theme/js/script.js"></script>
            <script type="text/javascript" src="./scripts/logout.js"></script>
            <script>
                // testing if sweetalert works
                function start() {
                    swal({
                        type: 'error',
                        title: 'Sorry...',
                        text: 'Mobile App still awaiting approval!',
                    })
                }
            </script>

    </body>

    </html>