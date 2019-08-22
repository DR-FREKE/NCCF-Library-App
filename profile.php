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
        <meta name="description" content="Site Builder Description">
        <title>profile</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="./assets/theme/css/style.css">
        <link rel="stylesheet" href="./assets/mobirise/css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/design.css" type="text/css">
        <script type="text/javascript" src="scripts/jquery.js"></script>
    </head>

    <body>
        <?php
            include('layout/app.php');
        ?>
            <section class="engine">
                <a href="https://mobiri.se/g">how to build your own site for free</a>
            </section>
            <section class="features16 cid-r4GnfJlnlP mbr-parallax-background" id="features16-r">
                <div class="card-body">
                    <div class="grid">
                        <div class="box box1">
                            <div class="left-box">
                                <div class="link-list">
                                    <ul>
                                        <li><a href="profile.php" class="active">Basic Information</a></li>
                                        <li><a href="" id="psw">Change Password</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-box">
                                <div class="form-data">
                                    <div class="mForm">
                                        <label for="name">Name</label>
                                        <div class="cover" id="mName">
                                            <input type="text" name="name" placeholder="Name" id="name" class="profileData">
                                        </div>
                                    </div>
                                    <div class="mForm">
                                        <label for="email">Email (required)</label>
                                        <div class="cover" id="mEmail">
                                            <input type="email" name="email" value="<?php echo $islogged->fetchData('email'); ?>" placeholder="Email" id="email" class="profileData" required>
                                        </div>
                                    </div>
                                    <div class="mForm">
                                        <label for="username">Username (required)</label>
                                        <div class="cover" id="mUsername">
                                            <input type="text" name="username" value="<?php echo $islogged->fetchData('name'); ?>" placeholder="Username" id="username" class="profileData" required>
                                        </div>
                                    </div>
                                    <div class="mForm">
                                        <label for="phone">Phone</label>
                                        <div class="cover" id="mPhone">
                                            <input type="text" name="phone" value="<?php echo $islogged->fetchData('contact'); ?>" placeholder="Phone" id="phone" class="profileData">
                                        </div>
                                    </div>
                                    <?php 
                                        if($islogged->fetchData('userLevel') == '0'){
                                    ?>
                                    <div class="mForm">
                                        <label for="reg_code">Library Code</label>
                                        <div class="cover" id="mReg_code">
                                            <input type="text" name="reg_code" id="" value="<?php echo $islogged->fetchData('reg_code'); ?>" class="profileData" disabled>
                                        </div>
                                    </div>
                                    <?php
                                        }else{
                                    ?>

                                        <?php
                                        }
                                    ?>
                                            <div class="mForm">
                                                <button type="button" id="btnUpdate" class="updateBtn">save changes</button>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="closeBtn"><span class="close" id="btnClose">&times;</span></div>
                    <div class="password-holder">
                        <div class="mForm">
                            <label for="new-password">New Password</label>
                            <div class="cover" id="mNew-pass">
                                <input type="password" name="new-password" placeholder="new password" id="new-password" class="profileData">
                            </div>
                        </div>
                        <div class="mForm">
                            <label for="confirm-password">Confirmation of New Password</label>
                            <div class="cover" id="mConfirm-pass">
                                <input type="password" name="confirm-password" placeholder="confirmation of new password" id="confirm-password" class="profileData">
                            </div>
                        </div>
                        <div class="mForm">
                            <label for="current-password">We need your current password to confirm your changes</label>
                            <div class="cover" id="mCurrent-pass">
                                <input type="password" name="current-password" placeholder="current password" id="current-password" class="profileData">
                            </div>
                        </div>
                        <div class="mForm">
                            <button type="button" id="btnUpdatepass" class="updateBtn">save password</button>
                        </div>
                    </div>
                </div>

            </div>

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
            <script src="assets/dropdown/js/script.min.js"></script>
            <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
            <script src="assets/parallax/jarallax.min.js"></script>
            <script src="assets/smoothscroll/smooth-scroll.js"></script>
            <script src="assets/theme/js/script.js"></script>
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
            <script type="text/javascript" src="./scripts/profile_details.js"></script>
    </body>

    </html>