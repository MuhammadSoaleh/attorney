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

<!-- Mirrored from html.themexriver.com/Attorney/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jul 2023 18:37:29 GMT -->
<head>
<meta charset="utf-8">
<meta name="description" content="Law Lawyer Law Office - Law  HTML Template">
<meta name="keywords" content="advocate, attorney, attorney website, attorneys, barrister, business, corporate, law, law firm, law office, lawyer, lawyer theme, legal blog, legal services, notary">
<meta name="author" content="Themexriver">
<title>Attorney Law HTML Template | About Us</title>
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
				<h1>About Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>About us</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- About Section -->
	<section class="about-section">
		<!-- Image Layer -->
		<div class="image-layer" style="background-image:url(images/resource/about-1.jpg)"></div>
		<div class="container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="section-title">
							<div class="title">about us</div>
							<h3>We are here to fight against any violance with <span>experience</span></h3>
						</div>
						
						<div class="text">
							<p>The argument in favor of using filler text goes something like this: If you use real content in the <span>design process,</span> anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
							<p>Aenean tincidunt id mauris id auctor. Donec at ligula lacus. Nulla dignissim mi quis neque interdum, quis porta sem finibus.</p>
						</div>
						<div class="row clearfix">
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>Praesent feugiat sem mattis.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>A wonderful serenity.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>Premium services beyond you.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>Set a link back to this photo.</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-8 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/about-2.jpg" alt=""/>
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h2>35 <span>years of experience</span></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Feature Section Two -->
	<section class="feature-section-two">
		<div class="container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Feature Block Two -->
					<div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="fill-line"></div>
						<div class="inner-box">
							<div class="year">2016</div>
							<h3>Started Journey</h3>
							<div class="text">Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
						</div>
					</div>
					
					<!-- Feature Block Two -->
					<div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="fill-line"></div>
						<div class="inner-box">
							<div class="year">2017</div>
							<h3>We employed lawyers</h3>
							<div class="text">Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
						</div>
					</div>
					
					<!-- Feature Block Two -->
					<div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="fill-line"></div>
						<div class="inner-box">
							<div class="year">2018</div>
							<h3>Winning best awards</h3>
							<div class="text">Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
						</div>
					</div>
					
					<!-- Feature Block Two -->
					<div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="fill-line"></div>
						<div class="inner-box">
							<div class="year">2019</div>
							<h3>Improved team</h3>
							<div class="text">Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>
	<!-- End Feature Section Two -->
	
	<!-- Counter Section -->
	<section class="counter-section style-two">
		<div class="container">
			<!-- Title Box -->
			<div class="title-box">
				<div class="section-title">
					<div class="row clearfix">
						<div class="column col-lg-6 col-md-12 col-sm-12">
							<div class="title">Fun fact</div>
							<h3>We feel very proud for our <br> great <span>achievement</span></h3>
						</div>
						<div class="column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">
								
								<div class="col-lg-6 col-md-6 col-sm-12">
									<p>Aenean tincidunt id mauris idology auctor. Donec at ligula lacus. Nulla dignissimmi quis neque interdum.</p>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12">
									<p>Aenean tincidunt id mauris idology auctor. Donec at ligula lacus. Nulla dignissimmi quis neque interdum.</p>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">
				
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="3000ms" data-stop="1825">0</span>+
								<div class="counter-title">Completed works</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2000" data-stop="532">0</span>+
								<div class="counter-title">Satisfied clients</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2000" data-stop="69">0</span>+
								<div class="counter-title">Winning awards</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="1500" data-stop="32">0</span>+
								<div class="counter-title">Team members</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="container">
		
			<!-- Sec Title -->
			<div class="section-title light">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Our Team</div>
						<h3>We feel very proud for our <br> great <span>achievement</span></h3>
					</div>
					<div class="pull-right">
						<div class="text">Aenean tincidunt id mauris idology auctor. Donec at ligula lacus. Nulla dig nissimmi quis neque interdum. An Ohio man allegedly punched his lawyer in the face in court Tuesday upon finding out he was sentenced.</div>
					</div>
				</div>
			</div>
			
			<div class="clearfix">
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="images/resource/team-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Jonson Leo</a></h3>
							<div class="designation">Civil Lawyer</div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">Contact info</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="images/resource/team-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Malina Leo</a></h3>
							<div class="designation">Terror Lawyer</div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">Contact info</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="images/resource/team-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Neobir Fro</a></h3>
							<div class="designation">Civil Lawyer</div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">Contact info</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="images/resource/team-4.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Neobir Fro</a></h3>
							<div class="designation">Criminal Lawyer</div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">Contact info</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	
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

</body>

<!-- Mirrored from html.themexriver.com/Attorney/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jul 2023 18:37:30 GMT -->
</html>