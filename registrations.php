<?php
if (isset($_POST['sub'])) {
	include('conn.php');
	
	
	
	
	$type = $_POST['type'];
    $name = $_POST['name'];
    $sql = "INSERT INTO `authority`(`authority_id`, `authority_name`) VALUES ('$type','$name')";
    $row = mysqli_query($conn, $sql);
	if ($row) {
		echo "<script> alert('submited succesfully') </script>";
		header('location:login.php');
	} else {
		echo "<script> alert('error') </script>";
	}
}


?>








<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/flaticon.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/owl.css" rel="stylesheet">
	<link href="css/jquery-ui.css" rel="stylesheet">
	<link href="css/animation.css" rel="stylesheet">
	<link href="css/jquery.fancybox.min.css" rel="stylesheet">
	<link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<style>
		body {
			background-image: url('images/main-slider/2.jpg');
			background-repeat: no-repeat;
		}




		form {

			width: 500px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid rgba(213, 170, 109, 1);
		}


		.glass {


			background: rgba(223, 196, 153, 0.25);
			box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
			backdrop-filter: blur(1.5px);
			-webkit-backdrop-filter: blur(1.5px);
			border-radius: 10px;
			border: 1px solid rgba(255, 255, 255, 0.18);
		}

		.glasss {
			/* From https://css.glass */
			background: rgba(197, 178, 109, 0.1);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(1.4px);
			-webkit-backdrop-filter: blur(1.4px);
			border: 1px solid rgba(212, 162, 91, 0.3);
		}

		::placeholder {
			color: #f2f2f2;
		}

		input {
			color: #f2f2f2;
			width: 100%;
			padding: 10px;
			border: 1px solid rgba(213, 170, 109, 1);
		}

		input[type="submit"] {
			background-color: rgba(213, 170, 109, 1);
			color: white;
			padding: 10px;
			border: none;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: rgba(213, 170, 109, 1);
		}

		input[type="submit"]:hover {
			/* position:absolute;
	right:0px;
	top:0px;
	cursor:pointer;
	color:#0b0505;
	font-size:15px;
	padding:9px 36px;
	font-weight:600;
	display:inline-block; */
			text-transform: uppercase;
			box-shadow: 0px 10px 20px rgba(213, 170, 109, 0.20);
			background-image: -ms-linear-gradient(left, #D5AA6D 0%, #9d7146 100%);
			background-image: -moz-linear-gradient(left, #D5AA6D 0%, #9d7146 100%);
			background-image: -o-linear-gradient(left, #D5AA6D 0%, #9d7146 100%);
			background-image: -webkit-gradient(linear, left top, right top, color-stop(0, #D5AA6D), color-stop(100, #9d7146));
			background-image: -webkit-linear-gradient(left, #D5AA6D 0%, #9d7146 100%);
			background-image: linear-gradient(to right, #D5AA6D 0%, #9d7146 100%);
		}

		@media screen and (max-width: 600px) {
			.form {
				width: 100% !important;
				height: fit-content !important;
			}
		}
	</style>
</head>

<body>

	<!-- start form -->
	<div class="col-12 mb-5">
		<center>
			<h2 class="mt-5" style="color: rgba(213, 170, 109, 1); ">RIGISTRATION FORM</h2>
		</center>


		<form class="glass" method="post" class="mt-5 form ">
			
        <select name="name" id="">
				<option value="admin">admin</option>
				<option value="attorney">attorney</option>
			</select>
			<br><br>
			<input class="glass" type="number" name="type" placeholder="id">
			<input class="glasss" type="submit" value="REGISTRATION" name="sub">
		</form>

	</div>

	<!-- end form  -->




	<!--Main Footer-->
	<footer class="main-footer">
		<div class="container">
			<!--Widgets Section-->
			<div class="widgets-section">
				<div class="row clearfix">

					<!--Column-->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!--Footer Column-->
							<div class="footer-column col-lg-7 col-md-6 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="logo px-1">
											<a href="index.php"><img src="WhatsApp_Image_2023-07-08_at_12.13.43_PM-removebg-preview.png" alt="" /></a>
										</div>
										<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
										<ul class="list-style-three px-1">
											<li><span class="icon fa fa-phone"></span> +123 (4567) 890</li>
											<li><span class="icon fa fa-envelope"></span> info@Attorney.com</li>
											<li><span class="icon fa fa-home"></span>380 St Kilda Road, Melbourne <br> VIC 3004, Australia</li>
										</ul>
									</div>
								</div>

							<!--Footer Column-->
							<div class="footer-column col-lg-5 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h4>Links</h4>
									<ul class="list-link mx-1">
										<li><a href="index.php">Home</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">About us</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">News</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!--Column-->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h4>Support</h4>
									<ul class="list-link mx-2">
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Submit a Ticket</a></li>
										<li><a href="#">Visit Knowledge Base</a></li>
										<li><a href="#">Support System</a></li>
										<li><a href="#">Refund Policy</a></li>
										<li><a href="#">Professional Services</a></li>
									</ul>
								</div>
							</div>

							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget gallery-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

	</footer>

	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>



	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/script.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/fontawesome.min.js" integrity="sha512-c41hNYfKMuxafVVmh5X3N/8DiGFFAV/tU2oeNk+upk/dfDAdcbx5FrjFOkFhe4MOLaKlujjkyR4Yn7vImrXjzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</body>

<!-- Mirrored from html.themexriver.com/Attorney/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jul 2023 18:37:14 GMT -->

</html>