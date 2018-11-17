<?php
include("connection.php");
session_start();
$user_name = $_SESSION['login_user'];

$result = mysqli_query($conn,"SELECT * FROM servicerequest WHERE assignedTo = '$user_name'");
//$service_query = mysqli_query($conn,"SELECT servicetype FROM serviceprovider,servicerequest WHERE serviceprovider.servicetype = servicerequest.servicetype");
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
					<h1><a href="indexSP.php">Medicare</a></h1>
					<span>For The Elderly..</span>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="indexSP.php">Welcome </a></li>
						<li>
							<a> Manage Request </a>
							<ul>
								<li class="current"><a href="ViewRequestsSP.php">New Requests</a>
								<li><a href="ViewRequestsSP.php">View Accepted Requests</a>
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

		<!-- Features -->
		<div id="features-wrapper">
					<div class="createrequest">
						<form action="createnewrequest.php" method="post" style="border:1px solid #ccc">
							<div class="createrequestcontainer">
								<br>
								<h2>Your Accepted Requests</h2>
                <?php
                echo "<table border='1'>
                <tr>
                <th>Request ID</th>
                <th>Date</th>
                <th>Notes</th>
								<th>Requested By</th>
                <th>Service Type</th>
								<th>Status</th>
								<th>Assigned To</th>
								<th>Action</th>

                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['requestID'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['notes'] . "</td>";
								echo "<td>" . $row['requestedBy'] . "</td>";
                echo "<td>" . $row['servicetype'] . "</td>";
								echo "<td>" . $row['status'] . "</td>";
								echo "<td>" . $row['assignedTo'] . "</td>";
								echo "<td><a href='Cancel.php?id=".$row['requestID']."'>Cancel</a></td>";
                echo "</tr>";
                }
                echo "</table>";
                ?>
								</div>
								</div>
						</form>
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
