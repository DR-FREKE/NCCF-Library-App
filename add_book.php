<?php 
	require_once('./phpScript/lumacon.php');
	require_once('./phpScript/main.php');

	$main = new main();

	if($main->isLoggedIn() && ($main->fetchData('userLevel') == 1)){
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
    <meta name="description" content="Web Maker Description">
    <title>Luma - Add Ebook</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/button.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/theme/css/button.css">
</head>

<body>
    <?php 
		include('layout/app.php');
	?>

    <section class="engine"><a href="https://mobiri.se/d">free website maker</a></section>
    <section class="cid-r4rZHStKkv mbr-fullscreen mbr-parallax-background" id="header15-m">





        <div class="container align-right">
            <div class="row">
                <div class="mbr-white col-lg-8 col-md-7 content-container">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2">
                        <br>ADD AN E-BOOK</h1>
                    <p class="mbr-text pb-3 mbr-fonts-style display-4">Add an e-book by entering the name of the author, attatching the file and clicking on the 'UPLOAD' button. Ensure you enter correct details to avoid mistakes from the users of the mobile app</p>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="form-container">
                        <div class="media-container-column" data-form-type="formoid">
                            <div data-form-alert="" hidden="" class="align-center">Thanks for filling out the form!</div>
                            <form class="mbr-form" autocomplete="off" id="mForm" action="ebook.php" method="POST" enctype="multipart/form-data">
                                <div data-for="name">
                                    <div class="form-group">
                                        <input type="hidden" name="ebook_id" id="ebook_id" value="ebook/<?php echo rand (1,9999) ?>">
                                        <input type="text" class="form-control px-3" name="ebook_name" id="ebook_name" placeholder="Name of E-book">
                                    </div>
                                </div>
                                <div data-for="email">
                                    <div class="form-group">
                                        <!-- <label for="file" class="input-label">Import a PDF or DOCX File</label> -->
                                        <input id="uploadFile" type="file" name="file">
                                    </div>
                                </div>
                                <div data-for="email">
                                    <div class="form-group">
                                        <input id="uploadImage" type="file" name="image" />
                                        <div id="preview"><img src="filed.png" /></div><br>
                                    </div>
                                </div>
                                <span class="input-group-btn">
									<button name="ebookBtn" type="button" class="btn btn-form btn-secondary display-4" id="btnUpload"><strong>Upload Book</strong></button>
								</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section once="" class="cid-r4G34f4JJk" id="footer6-s">





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
    <script type="text/javascript" src="scripts/ebooks.js"></script>

</body>

</html>

<?php
	}else{
		header('Location: error404.php');
	}
?>