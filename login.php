<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/bookcor-122x122.jpg" type="image/x-icon">
    <meta name="description" content="Web Builder Description">
    <title>login</title>
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
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/myscripts.js"></script>
</head>

<body>
    <section class="menu cid-r3Z9PAe6Wn" once="menu" id="menu2-l">
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
							<img src="assets/images/bookcor-122x122.jpg" title="" style="height: 3.8rem;">
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
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="login.php">Login</a></li>
                </ul>

            </div>
        </nav>
    </section>

    <section class="mbr-section form1 cid-r4G1ihqqdL mbr-parallax-background" id="form1-o">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>E-Library Login</strong></h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-4">Login with your Username and Password</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">Thanks for filling out the form!</div>
                    <form class="mbr-form" autocomplete="off">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-4" for="name-form1-d">Username</label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-4" for="email-form1-d">Password</label>
                                    <input type="password" class="form-control" name="password" data-form-field="Password" id="password">
                                </div>
                            </div>
                        </div>
                        <span class="input-group-btn"><button name="loginBtn" id="formVal" onclick="login();" type="button" id="btnLog" class="btn btn-form btn-secondary display-4"><strong>LOGIN</strong></button></span>
                    </form>
                    <div class="col-md-12 display-4" style="text-align:center; padding:1em 0;">First time here? <a class="text-black display-4" href="register.php">Create your Account</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content11 cid-r4G1gmLU6l" id="content11-n">


        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-4">
                    <ol>
                        <li><strong>Get Registration Code - </strong>&nbsp;Meet the Librarian or any member from the Library unit to get your registration code [#100]. You cannot signup without a valid reg-code!
                        </li>
                        <li><strong>Login &amp; Explore - </strong>&nbsp;After registering, login with your username and password, explore, select any book and download for free!&nbsp;</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section once="" class="cid-r4G2JWWimO" id="footer6-p">

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
    <script src="assets/formoid/formoid.min.js"></script>
    <script type="text/javascript" src="./scripts/access.js"></script>

</body>

</html>