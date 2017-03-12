<?php
if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){
	$message = 'Passwords should be same<br>';
	}

	/* Email Validation */
	if(!isset($message)) {
	if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
	$message = "Invalid UserEmail";
	}
	}

	/* Validation to check if gender is selected */
	if(!isset($message)) {
	if(!isset($_POST["gender"])) {
	$message = " Gender field is required";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($message)) {
	if(!isset($_POST["terms"])) {
	$message = "Accept Terms and conditions before submit";
	}
	}

	if(!isset($message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO registered_users (user_name, first_name, last_name, password, email, gender) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$message = "You have registered successfully!";
			unset($_POST);
		} else {
			$message = "Problem in registration. Try Again!";
		}
	}
}
?>

<html>
<head>
<title> Qwiklync | Registration </title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

<!-- Theme CSS -->
<link href="css/grayscale.min.css" rel="stylesheet">
<link href="css/grayscale.css" rel="stylesheet">

<!-- Modal CSS -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- Left menu bar css -->
<link href="css/leftmenu.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9] -->
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	 <script src="js/ie.js"></script>
<!-- [endif] -->

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> <!-- favicon in the tab -->

<style>

.message {color: #FF0000;font-weight: bold;text-align: center;width: 100%;padding: 10;}
body{width:610px;}
.demo-table {background:#FFDFDF;width: 100%;border-spacing: initial;margin: 20px 0px;word-break: break-word;table-layout: auto;line-height:1.8em;color:#333;}
.demo-table td {padding: 20px 15px 10px 15px;}
.demoInputBox {padding: 7px;border: #F0F0F0 1px solid;border-radius: 4px;}
.btnRegister {padding: 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer;}

</style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
dy>

<!-- Top Navigation Bar start-->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
				<div class="navbar-header">

								<a class="navbar-brand page-scroll" href="#page-top">
								<!-- menu btn -->
							 <i id="menubtn" class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content" ></i>
								<!-- Logo -->
								<img id="logosize" src="img/Qwiklync-logo.png" alt="Qwiklync_logo">
						</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
						<ul class="nav navbar-nav">
								<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
								<li class="hidden">
										<a href="#page-top"></a></li>
								<li>
										<!-- <a class="page-scroll" href="#about">About</a> --></li>
							<!-- <li><a href="#menu" data-toggle="collapse" data-target="#menu"><span class="glyphicon glyphicon-menu-left"></span> Menu </a></li> -->

								<li>
										<!-- <a class="page-scroll" href="#download">Download</a> --></li>
							<!--	<li><a href="#" data-toggle="collapse" data-target="#loginModal">
										<span class="glyphicon glyphicon-log-in"></span> Login / Sign Up</a></li> -->

								<!-- <li>
												 <a class="page-scroll" href="#contact">Contact</a>
										 </li> -->
						</ul>
				</div>
				<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
</nav>
<!-- top nav bar end -->

<!-- Left menu bar options Start -->
<div class="nav-side-menu">

		<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

		<div class="menu-list">

				<ul id="menu-content" class="menu-content collapse out">
						<li>
								<a href="#">
										<i class="fa fa-home fa-lg"></i> Home
								</a>
						</li>

						<li data-toggle="collapse" data-target="#resume" class="collapsed">
								<a href="#"><i class="fa fa-hand-paper-o fa-lg"></i> Resume <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="resume">

								<a href="#"> <li> Upload </li> </a>
								<a href="#"> <li> Download </li> </a>

						</ul>

						<li data-toggle="collapse" data-target="#jobpost" class="collapsed">
								<a href="#"><i class="fa fa-paper-plane fa-lg"></i> Job Post <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="jobpost">

								<a href="#"> <li> Company </li> </a>
								<a href="#"> <li> Individual </li> </a>

						</ul>


						<li data-toggle="collapse" data-target="#reg" class="collapsed">
								<a href="#"><i class="fa fa-car fa-lg"></i> Register <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="reg">
								<a href="#"> <li> Company </li> </a>
								<a href="#"> <li> Individual </li> </a>
						</ul>

						<li>
								<a href="#">
										<i class="fa fa-user fa-lg"></i> About Us
								</a>
						</li>

						<li>
								<a href="#">
										<i class="fa fa-users fa-lg"></i> Contact Us
								</a>
						</li>
				</ul>
		</div>
</div>
<!-- Left menu bar End -->

<!--  reg form start -->
<form name="frmRegistration" method="post" action="">
	<table border="0" width="500" align="center" class="demo-table">
		<div class="message"><?php if(isset($message)) echo $message; ?></div>
			<tr>
				<td>Username</td>
				<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
			</tr>

			<tr>
				<td>First Name</td>
				<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
			</tr>

			<tr>
				<td>Last Name</td>
				<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" class="demoInputBox" name="password" value=""></td>
			</tr>

			<tr>
				<td>Confirm Password</td>
				<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
				</tr>

				<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
					<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="checkbox" name="terms"> I accept Terms and Conditions</td>
				</tr>
</table>

<div>
		<input type="submit" name="submit" value="Register" class="btnRegister">
</div>
</form>
<!-- reg form end -->


<!-- Footer -->
<footer class="footer1">
		<div class="container">

				<div class="row"><!-- row -->

						<div class="col-lg-3 col-md-3"><!-- widgets column left -->
								<ul class="list-unstyled clear-margins"><!-- widgets -->
										<li class="widget-container widget_nav_menu"><!-- widgets list -->
												<h1 class="title-widget">Useful links</h1>
												<ul>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Regular Batch</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test & Discussion</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Fast Track T & D</a></li>
												</ul>
										</li>
								</ul>
						</div><!-- widgets column left end -->



						<div class="col-lg-3 col-md-3"><!-- widgets column left -->
								<ul class="list-unstyled clear-margins"><!-- widgets -->
										<li class="widget-container widget_nav_menu"><!-- widgets list -->
												<h1 class="title-widget">Useful links</h1>
												<ul>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test Series Schedule</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Postal Coaching</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  PG Dr. Bhatia Books</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  UG Courses</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Satellite Education</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Study Centres</a></li>
														<li><a  href="#"><i class="fa fa-angle-double-right"></i>  State P.G. Mocks</a></li>
														<li><a  href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Results</a></li>
												</ul>
										</li>
								</ul>
						</div><!-- widgets column left end -->

						<div class="col-lg-3 col-md-3"><!-- widgets column left -->
								<ul class="list-unstyled clear-margins"><!-- widgets -->
										<li class="widget-container widget_nav_menu"><!-- widgets list -->
												<h1 class="title-widget"> Connect with </h1>
												<div class="social-icons">

														<ul class="nomargin">

																<a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
																<a href="https://twitter.com/"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
																<a href="https://plus.google.com/"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
																<a href="mailto:abcd@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>

														</ul>
												</div>
										</li>
								</ul>
						</div><!-- widgets column left end -->


						<div class="col-lg-3 col-md-3"><!-- widgets column center -->

								<ul class="list-unstyled clear-margins"><!-- widgets -->

										<li class="widget-container widget_recent_news"><!-- widgets list -->

												<h1 class="title-widget">Contact Detail </h1>

												<div class="footerp">

														<h2 class="title-median"> QWIKLYNC </h2>
													 <!-- <p><b>Email id:</b> <a href="mailto:info@qwiklync.com">info@qwiklync.com</a></p>
														<p><b>Helpline Numbers</b> <b style="color:#ffc106;">(8AM to 6PM):</b></p>
														<p>+91-8130890090,</p>
														<p>+91-8130190010</p> -->

														<h5> Contact Address </h5>
													 <p>
															 32 Munirappa Garden, </br>
															 Sanjaynagar, </br>
															 Bangalore 560094 </br>
													 </p>

														<!--
														<p><b>Corp Office / Postal Address</b></p> -->
														<br><p>Phone Numbers :<br>
														1234567890 </p>
														<p> 011-123455678, 1234567890</p>
												</div>


										</li>
								</ul>
						</div>
				</div>
		</div>
</footer>
<!--Footer End-->

<div class="footer-bottom">
		<div class="container">
				<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="copyright">
										© 2017, Qwiklync, All rights reserved
								</div>

						</div>

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

								<div class="design">

										<a href="#">Developers </a> |  <a target="_blank" href="#">Web Design & Development by Iatwork4u</a>

								</div>

						</div>

				</div>

		</div>

</div>

<!-- jQuery -->
<script src="vendor/jquery/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Theme JavaScript -->
<script src="js/grayscale.min.js"></script>

</body>

</html>
