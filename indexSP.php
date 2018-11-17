<?php
include("loginservSU.php");
//
session_start();
$user_name = $_SESSION['login_user'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>MediCare</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			<header id="header" class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="indexSP.php">MediCare</a></h1>
					<span>For The Elderly..</span>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="indexSP.php">Welcome </a></li>
						<li>
							<a>Manage Requests</a>
							<ul>
								<li><a href="ViewRequestsSP.php">New Requests</a>
								<li><a href="ViewAcceptedSP.php">View Accepted Requests</a>
								</li>
							</ul>
						<li>

							<li><a href="logout.php">Log Out</a></li>
							<li><b><?php echo $user_name;?></b></li>
					</li>
					</ul>
				</nav>

			</header>
		</div>

		<!-- Banner -->
		<div id="banner-wrapper">
			<div id="banner" class="box container">
				<div class="row">
					<div class="col-7 col-12-medium">
						<h2>Welcome to Medicare.</h2>
						<p>Find Elderly Care for Your Loved Ones </p>
					</div>
					<div class="col-5 col-12-medium">
						<ul>
							<li><a href="CreateNewRequest.html" class="button large icon fa-arrow-circle-right">Find Elder Care </a></li>
							<li><a href="#" class="button alt large icon fa-question-circle">More info</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Features -->
		<div id="features-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-4 col-12-medium">

						<!-- Box -->
						<section class="box feature">
							<a href="#" class="image featured"><img src="images/care4.jpg" alt="" /></a>
							<div class="inner">
								<header>
									<h2>Mr John Wick </h2>
									<p>RM1,200/month</p>
								</header>
								<p>Mr John requires non-medical, in-home health care support services</p>
							</div>
						</section>

					</div>
					<div class="col-4 col-12-medium">

						<!-- Box -->
						<section class="box feature">
							<a href="#" class="image featured"><img src="images/care4.jpg" alt="" /></a>
							<div class="inner">
								<header>
									<h2>Anne H</h2>
									<p>RM750/month, 3 months minimum</p>
								</header>
								<p>Suffering from Alzheimer/dementia, requires companionship</p>
							</div>
						</section>

					</div>
					<div class="col-4 col-12-medium">

						<!-- Box -->
						<section class="box feature">
							<a href="#" class="image featured"><img src="images/care4.jpg" alt="" /></a>
							<div class="inner">
								<header>
									<h2>Chris E</h2>
									<p>RM2,000/month</p>
								</header>
								<p>Chris requires diabetic assistance, meal preparation and medication routines</p>
							</div>
						</section>

					</div>
				</div>
			</div>
		</div>

		<!-- Main -->
		<div id="main-wrapper">
			<div class="container">
				<div class="row gtr-200">
					<div class="col-4 col-12-medium">

						<!-- Sidebar -->
						<div id="sidebar">
							<section class="widget thumbnails">
								<h3>Our Customers</h3>
								<div class="grid">
									<div class="row gtr-50">
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpeg" alt="" /></a></div>
									</div>
								</div>
							</section>
						</div>

					</div>
					<div class="col-4 col-12-medium imp-medium">

						<!-- Content -->
						<div id="content">
							<section class="last">
								<h2>How Does It Work?</h2>
								<p><strong>Step 1 </strong>Select Your Preferred Service</p>
								<p><strong>Step 2 </strong>Wait For Processing</p>
								<p><strong>Step 3 </strong>Get in Touch with Your Caretaker</p>
								<a href="Login.html" class="button icon fa-arrow-circle-right">Get Started</a>
							</section>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div id="footer-wrapper">
			<footer id="footer" class="container">
				<div class="row">
					<div class="col-3 col-6-medium col-12-small">

						<!-- Links -->
						<section class="widget links">
							<h3>Our Affiliates </h3>
							<ul class="style2">
								<li><a href="#">HireABabysitter.com</a></li>
								<li><a href="#">HireAChef.com</a></li>
								<li><a href="#">HireAGardener.com</a></li>
								<li><a href="#">HireAPlumber.com</a></li>
								<li><a href="#">HireAProgrammer.com</a></li>
							</ul>
						</section>

					</div>
					<div class="col-3 col-6-medium col-12-small">

						<!-- Links -->
						<section class="widget links">
							<h3>Social</h3>
							<ul class="style2">
								<li><a href="#">Blog</a></li>
								<li><a href="#">LinkedIn</a></li>
							</ul>
						</section>

					</div>
					<div class="col-3 col-6-medium col-12-small">

						<!-- Links -->
						<section class="widget links">
							<h3>Support</h3>
							<ul class="style2">
								<li><a href="#">Support</a></li>
								<li><a href="#">Security Info</a></li>
								<li><a href="#">Senior Care Cost Guide</a></li>
							</ul>
						</section>

					</div>
					<div class="col-3 col-6-medium col-12-small">

						<!-- Contact -->
						<section class="widget contact last">
							<h3>Contact Us</h3>
							<ul>
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
							<p>15, Jalan Sri Semantan 1,<br/>
										Damansara Heights, 50490 KL<br />
										03-2716 2000</p>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div id="copyright">
							<ul class="menu">
								<li>&copy; MediCare. All rights reserved</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>

	<!-- Scripts -->

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
