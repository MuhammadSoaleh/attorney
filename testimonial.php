<?php

if(isset($_POST['submit'])){
    include('conn.php');
    // $fname=$_POST['firstname'];
    // $lname=$_POST['lastname'];
    $emaill=$_POST['email'];
    // $message=$_POST['message'];
    $sql="INSERT INTO `indexemail`(`email`) VALUES ('$emaill')";
    
    $resultt=mysqli_query($conn,$sql);
    // $row=mysqli_num_rows($result);
    if($resultt){
        echo "<script> alert('form submitted') </script>";

		header('Location:contact.php');
    }
    else{
        echo "<script> alert('error') </script>";
    }
}
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from html.themexriver.com/Attorney/testimonial.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jul 2023 18:37:30 GMT -->
<head>
<meta charset="utf-8">
<meta name="description" content="Law Lawyer Law Office - Law  HTML Template">
<meta name="keywords" content="advocate, attorney, attorney website, attorneys, barrister, business, corporate, law, law firm, law office, lawyer, lawyer theme, legal blog, legal services, notary">
<meta name="author" content="Themexriver">
<title>Attorney Law HTML Template | Testimonial</title>
<!-- Stylesheets -->
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
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
  <!-- Main Header-->
  <header class="main-header">
    <!--Header-Upper-->
	<div class="header-upper">
	<div class="container">
	<div class="clearfix">
	<!-- Logo Box -->
	<div class="pull-left logo-box">
	<div class="logo"><a href="index.php"><img src="WhatsApp_Image_2023-07-08_at_12.13.43_PM-removebg-preview.png" alt="" title=""></a></div>
	</div>
	<div class="nav-outer clearfix">
	<!-- Main Menu -->
	<nav class="main-menu navbar-expand-md">
	<div class="navbar-header">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	</div>
	<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
	<ul class="navigation clearfix">
	<li><a href="index.php">Home</a></li>
	

	
	<li class="dropdown"><a href="#">About Us</a>
	<ul>
	<li><a href="about.php">About Us</a></li>
	<li><a href="testimonial.php">Testimonial</a></li>
	</ul>
	</li>
	<li><a href="services.php">Services</a></li>
	
	
	
	
	</li>
	
	<li><a href="contact.php" >Contact us</a></li>
	<?php

if (isset($_SESSION['email'])) {
    echo '<li class="dropdown"  ><a href="#" style="text-transform: none !important;">' . $_SESSION['email'] . '</a>
        <ul>
            
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </li>';
} else {
    echo '<li><a href="login.php">login</a></li>';
}
?>

	
	
	</ul>
	</div>
	</nav>

	<div class="outer-box">
	<!--Search Box-->
	<div class="search-box-outer">
	<div class="dropdown">
	<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
	<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu1">
	<li class="panel-outer">
	<div class="form-container">
	<form method="get" >
	<div class="form-group"><input type="search" name="search_term" value="" placeholder="Search Here" required>
	<button name="search" type="submit" class="search-btn">
		<span class="fa fa-search"></span></button></div>
	</form>
	</div>
	</li>
	</ul>
	</div>
	</div>
	


	<!--Nav Toggler-->
	<div class="nav-toggler"><div class="nav-btn hidden-bar-opener"><span class="flaticon-menu"></span></div></div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!--End Header Upper-->
	
	</header>
    <!--End Main Header -->
	
	<!--Form Back Drop-->
    <div class="form-back-drop"></div>
	
    <!-- Hidden Navigation Bar -->
	<section class="hidden-bar right-align">
		<div class="hidden-bar-closer">
		<button><span class="fa fa-remove"></span></button>
		</div>
		<!-- Hidden Bar Wrapper -->
		<div class="hidden-bar-wrapper">
		<div class="inner-box">
		<div class="logo">
		<a href="index.html"><img src="WhatsApp_Image_2023-07-08_at_12.13.43_PM-removebg-preview.png" alt="" /></a>
		</div>
		<div class="text">Lorem ipsum, or lipsum as it is sometimes the known, is dummy text used in laying out print, graphic or web designs. The passage</div>
		<!-- List Style Four -->
		<ul class="list-style-four">
		<li><span class="icon flaticon-house"></span> <strong>Collins Street</strong>West Victoria 8007 Australia</li>
		<li><span class="icon flaticon-phone-call"></span> <strong>Call us!</strong>124-3254-325</li>
		<li><span class="icon flaticon-talk"></span><strong>Mail address</strong>info@domain.com</li>
		</ul>
		<div class="lower-box">
		<!-- Social Icons -->
		<ul class="social-icons">
		<li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
		<li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
		<li class="pinterest"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
		<li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
		</ul>
		<a href="#" class="theme-btn buy-btn">Buy Attorney today!</a>
		</div>
		</div>
		</div><!-- / Hidden Bar Wrapper -->
	</section>
	<!-- End / Hidden Bar -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
    	<div class="container">
			<div class="content">
				<h1>Testimonial</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Testimonial</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Testimonial Page Section -->
	<section class="testimonial-page-section">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<div class="title">Testimonial</div>
				<h3>We are here to manage your <br> finance with <span>experience</span></h3>
			</div>
			
			<div class="row clearfix">
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="quote-icon flaticon-two-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="images/resource/author-5.jpg" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Amber Lee</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="quote-icon flaticon-two-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="images/resource/author-6.jpg" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Anny Leo</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="quote-icon flaticon-two-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="images/resource/author-6.jpg" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Piter jho</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="quote-icon flaticon-two-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="images/resource/author-6.jpg" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Nora Williams</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="quote-icon flaticon-two-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="images/resource/author-6.jpg" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Tess Belgium</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="quote-icon flaticon-two-quotes"></div>
						<div class="image-outer">
							<div class="image">
								<img src="images/resource/author-6.jpg" alt="" />
							</div>
						</div>
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime  reach a review point you’ll end up reviewing and negotiating.</div>
						<h5>Sarah Sloth</h5>
						<div class="designation">Co-founder</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Page Section -->
	
		<!-- Subscribe Section -->
		<section class="subscribe-section">
		<div class="container">
			<div class="inner-container" style="background-image: url(images/background/3.jpg)">
				<h2>Subscribe Your Email for Newsletter <br> & Promotion</h2>
				<!-- Subscribe Form -->
				<div class="subscribe-form">
					<form method="post" action="">
						<div class="form-group">
							<input type="email" name="email" value="" placeholder="Email address.." required>
							<button type="submit" name="submit" class="theme-btn subscribe-btn">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End Subscribe Section -->
	
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
										<div class="logo">
											<a href="index.php"><img src="WhatsApp_Image_2023-07-08_at_12.13.43_PM-removebg-preview.png" alt="" /></a>
										</div>
										<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
										<ul class="list-style-three">
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
										<ul class="list-link">
											<li><a href="index.php">Home</a></li>
											<li><a href="services.php">Services</a></li>
											<li><a href="about.php">About us</a></li>
											<li><a href="testimonial.php">Testimonials</a></li>
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
										<ul class="list-link">
											<li><a href="contact.php">Contact Us</a></li>
											<li><a href="#">Submit a Ticket</a></li>
											<li><a href="#">Visit Knowledge Base</a></li>
											<li><a href="#">Support System</a></li>
											<li><a href="#">Refund Policy</a></li>
											<li><a href="services.php">Professional Services</a></li>
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