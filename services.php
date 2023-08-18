<?php
session_start();
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data from the $_POST superglobal
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $lawyer = $_POST['lawyer'];

    // Validate the form data (you can add additional validation as needed)
    $errors = [];

    // Validate name
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    // Validate age
    if (empty($age)) {
        $errors[] = "Age is required";
    } elseif (!is_numeric($age)) {
        $errors[] = "Age must be a number";
    }

    // Validate gender
    if (empty($gender)) {
        $errors[] = "Gender is required";
    }

    // Validate email
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Validate date
    if (empty($date)) {
        $errors[] = "Date is required";
    }

    // Validate time
    if (empty($time)) {
        $errors[] = "Time is required";
    }

    // Validate place
    if (empty($place)) {
        $errors[] = "Place is required";
    }

        // Validate lawyer
        if (empty($lawyer)) {
            $errors[] = "lawyer is required";
        }

    // If there are errors, display them to the user
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // No errors, proceed with database insertion and email notification

        // Connect to the database (replace the database credentials with your own)
        $conn = mysqli_connect("localhost", "root", "", "attorney");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Escape the form data to prevent SQL injection
        $name = mysqli_real_escape_string($conn, $name);
        $age = mysqli_real_escape_string($conn, $age);
        $gender = mysqli_real_escape_string($conn, $gender);
        $email = mysqli_real_escape_string($conn, $email);
        $date = mysqli_real_escape_string($conn, $date);
        $time = mysqli_real_escape_string($conn, $time);
        $place = mysqli_real_escape_string($conn, $place);
        $lawyer = mysqli_real_escape_string($conn, $lawyer);

        // Insert the form data into the database
        $sql = "INSERT INTO meeting (`name`, `age`, `gender`, `email`, `date`, `time`, `place`, `lawyer`) VALUES ('$name', '$age', '$gender', '$email', '$date', '$time', '$place', '$lawyer')";
        if (mysqli_query($conn, $sql)) {
            // Database insertion successful

            // Send email notification to the attorney
            $attorney_email = 'psoaleh63@gmail.com';
            $subject = 'New meeting request';
            $message = 'You have a new meeting request from ' . $name . '. The details of the meeting are as follows:' . PHP_EOL .
                'Date: ' . $date . PHP_EOL .
                'Time: ' . $time . PHP_EOL .
                'Place: ' . $place;
            if (mail($attorney_email, $subject, $message)) {
                // Email sent successfully
                header('Location: contact.html');
                exit;
            } else {
                // Email sending failed
                echo "<p>Email sending failed</p>";
            }
        } else {
            // Database insertion failed
            echo "<p>Database insertion failed</p>";
        }

        // Close the database connection
        mysqli_close($conn);
    }
}




?>
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

<!-- Mirrored from html.themexriver.com/Attorney/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jul 2023 18:37:30 GMT -->
<head>
<meta charset="utf-8">
<meta name="description" content="Law Lawyer Law Office - Law  HTML Template">
<meta name="keywords" content="advocate, attorney, attorney website, attorneys, barrister, business, corporate, law, law firm, law office, lawyer, lawyer theme, legal blog, legal services, notary">
<meta name="author" content="Themexriver">
<title>Attorney Law HTML Template | Services</title>
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
<style>
      .body {
        background-image: url('images/main-slider/2.jpg');

background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}




 form {
  
width: 500px;
margin: 0 auto;
padding: 20px;
border: 1px solid rgba(213, 170, 109, 1);
} 


.glass
{
  

background: rgba( 223, 196, 153, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 1.5px );
-webkit-backdrop-filter: blur( 1.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}

.glasss
{
/* From https://css.glass */
background: rgba(197, 178, 109, 0.1);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(1.4px);
-webkit-backdrop-filter: blur(1.4px);
border: 1px solid rgba(212, 162, 91, 0.3);
}

::placeholder
{
  color: #f2f2f2;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
background-color:rgba(213, 170, 109, 1);
}

input[type="submit"]:hover
{
/* position:absolute;
	right:0px;
	top:0px;
	cursor:pointer;
	color:#0b0505;
	font-size:15px;
	padding:9px 36px;
	font-weight:600;
	display:inline-block; */
	text-transform:uppercase;
	box-shadow:0px 10px 20px rgba(213,170,109,0.20);
	background-image: -ms-linear-gradient(left, #D5AA6D 0%, #9d7146 100%);
	background-image: -moz-linear-gradient(left, #D5AA6D 0%, #9d7146 100%);
	background-image: -o-linear-gradient(left, #D5AA6D 0%, #9d7146 100%);
	background-image: -webkit-gradient(linear, left top, right top, color-stop(0, #D5AA6D), color-stop(100, #9d7146));
	background-image: -webkit-linear-gradient(left, #D5AA6D 0%, #9d7146 100%);
	background-image: linear-gradient(to right, #D5AA6D 0%, #9d7146 100%);}

  @media screen and (max-width: 600px) {
  .form {
    width: 100% !important; height: fit-content !important;
  }
}

  </style>
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
				<h1>Services</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Services</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Services Section Two -->
	<section class="services-section-four">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<div class="title">Services</div>
				<h3>We are here to fight against any <br> violance with <span>experience</span></h3>
			</div>
			<div class="row clearfix">
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-internet"></span>
						</div>
						<h3>Business Law</h3>
						<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
						<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-internet"></span>
									<h4><a href="services-detail.html">Business Law</a></h4>
									<a href="services-detail.html" class="theme-btn btn-style-one">consult now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-museum"></span>
						</div>
						<h3>Civil Law</h3>
						<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
						<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-museum"></span>
									<h4><a href="services-detail.html">Civil Law</a></h4>
									<a href="services-detail.html" class="theme-btn btn-style-one">consult now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-gun"></span>
						</div>
						<h3>Criminal Law</h3>
						<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
						<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-gun"></span>
									<h4><a href="services-detail.html">Criminal Law</a></h4>
									<a href="services-detail.html" class="theme-btn btn-style-one">consult now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-plan"></span>
						</div>
						<h3>Business Law</h3>
						<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
						<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-plan"></span>
									<h4><a href="services-detail.html">Business Law</a></h4>
									<a href="services-detail.html" class="theme-btn btn-style-one">consult now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-book"></span>
						</div>
						<h3>Education Law</h3>
						<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
						<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-book"></span>
									<h4><a href="services-detail.html">Education Law</a></h4>
									<a href="services-detail.html" class="theme-btn btn-style-one">consult now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-house-outline"></span>
						</div>
						<h3>Real Estate law</h3>
						<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
						<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-house-outline"></span>
									<h4><a href="services-detail.html">Real Estate law</a></h4>
									<a href="services-detail.html" class="theme-btn btn-style-one">consult now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		
		</div>
	</section>
	<!-- End Services Section Two -->
	<!-- start form -->
<div class="col-12 mb-5 body ">
<center><h2 class="mt-5" style="color: rgba(213, 170, 109, 1); ">MEETING FORM</h2></center> 


<form class="glass" method="post" class="mt-5 form mb-5 ">
<input class="glasss" required  type="text" name="name" placeholder="Name"><br> <br>
<input class="glasss" required  type="text" name="age" placeholder="Age"><br> <br>
<input class="glasss" required  type="text" name="gender" placeholder="Gender"><br> <br>
<input class="glasss" required type="email" name="email" placeholder="Email"><br> <br>
<input class="glasss" required type="date" name="date" placeholder="Date"><br> <br>
<input class="glasss" required type="time" name="time" placeholder="Time"><br> <br>
<input class="glasss" required type="text" name="place" placeholder="Place"><br> <br>
<input class="glasss" required type="text" name="lawyer" placeholder="Lawyer"><br> <br>
<input class="glasss" type="submit" value="MEETING" name="submit"><br> 
</form>

</div>

<!-- end form  -->

	<!-- Pricing Section -->
	<section class="pricing-section">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<div class="title">Pricing</div>
				<h3>Choose the best pricing <br> to start <span> consulting </span></h3>
			</div>
			
			<!--Pricing Info Tabs-->
			<div class="pricing-info-tabs">
				<!--Pricing Tabs-->
				<div class="pricing-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#package-monthly" class="tab-btn active-btn"><span class="circle"></span> Monthly</li>
						<li data-tab="#package-yearly" class="tab-btn"><span class="circle"></span> Yearly <span class="save">Save 20%</span></li>
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="package-monthly">
							<div class="content">
								<div class="row clearfix">
									
									<!-- Price Block -->
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<div class="icon flaticon-startup-1"></div>
												<h5>Basic Plan</h5>
											</div>
											<div class="price">$29 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
									<!-- Price Block -->
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<div class="icon flaticon-startup"></div>
												<h5>Standard Plan</h5>
											</div>
											<div class="price">$49 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
									<!-- Price Block -->
									<div class="price-block col-lg-4 col-md-12 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<div class="icon flaticon-startup-2"></div>
												<h5>Extended Plan</h5>
											</div>
											<div class="price">$59 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<!-- Tab -->
						<div class="tab" id="package-yearly">
							<div class="content">
								
								<div class="row clearfix">
									
									<!-- Price Block -->
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<div class="icon flaticon-startup-1"></div>
												<h5>Basic Plan</h5>
											</div>
											<div class="price">$29 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
									<!-- Price Block -->
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<div class="icon flaticon-startup"></div>
												<h5>Standard Plan</h5>
											</div>
											<div class="price">$49 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
									<!-- Price Block -->
									<div class="price-block col-lg-4 col-md-12 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<div class="icon flaticon-startup-2"></div>
												<h5>Extended Plan</h5>
											</div>
											<div class="price">$59 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing Section -->
	
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