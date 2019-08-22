<?php
include "./phpScript/lumacon.php";

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
	<title>LUMA - Admin Home</title>
	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
	<link rel="stylesheet" href="assets/tether/tether.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assets/dropdown/css/style.css">
	<link rel="stylesheet" href="assets/theme/css/style.css">
	<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
	<script type="text/javascript" src="scripts/jquery.js"></script>


</head>

<body>
	<?php 
		include('layout/app.php');
	?>
	<section class="engine"><a href="https://mobiri.se/p">site templates free download</a></section>
	<section class="header5 cid-r4G00rHt38 mbr-fullscreen mbr-parallax-background" id="header5-k">




		<div class="container">
			<div class="row justify-content-center">
				<div class="mbr-white col-md-10">
					<h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>LUMA ADMIN PORTAL</strong></h1>
					<p class="mbr-text align-center display-5 pb-3 mbr-fonts-style display-4">Welcome <strong><?php 
						$islogged = new main();
						echo $islogged->fetchData('name');
					?></strong>,<br>to your dashboard, your operations are;</p>
					<div class="mbr-section-btn align-center"><a class="btn btn-md btn-secondary-outline display-4" href="add_book.php"><strong>ADD E-BOOK</strong></a> <a class="btn btn-md btn-secondary-outline display-4" href="members.php"><strong>VIEW MEMBERS</strong></a><a class="btn btn-md btn-secondary-outline display-4" href="pin_home.php"><strong>CREATE PIN</strong></a></div>
				</div>
			</div>
		</div>


	</section>

	<section once="" class="cid-r4G2ZyaVss" id="footer6-r">





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
</body>

</html>
