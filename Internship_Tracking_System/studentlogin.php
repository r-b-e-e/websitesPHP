<?php
include ("db.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Internship Tracking System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="firstpage">

		<!-- Header -->
			<div id="header-wrapper">
				<div class="container">

					<!-- Header -->
						<header id="header">
							<div class="inner">
							
								<!-- Logo -->
									<h1><a href="index.php" id="logo">INTERNSHIP TRACKING SYSTEM</a></h1>
								
								<!-- Nav -->
									<nav id="nav">
										<ul>
											<li class="current_page_item"><a href="index.php">HOME</a></li>
											<li class="current_page_item"><a href="aboutus.php">ABOUT US</a></li>
											<li class="current_page_item"><a href="contactus.php">CONTACT US</a></li>
										</ul>
									</nav>
							
							</div>
						</header>



					<!-- Banner -->
						<div id="banner">
							<header id="header">
								<div class="inner">
									<h1><strong><a href="studentlogin.php" style="color: white; font-size: 30px;text-align: center">LOGIN</a></strong></h1>

								</div>	
							</header>


							
							<?php
							if (isset($_POST['submit']))
							{

								$userName = $_POST['personid'];
								$password = $_POST['password'];
								$sqlLoginCheck = "SELECT * FROM `login_details` WHERE person_id='$userName' and password='$password' and person_type='S'";
								$result = mysqli_query ( $dbcon, $sqlLoginCheck );
								$count = mysqli_num_rows($result);
								
								if ($count == 1)
								{
									session_start();
									$_SESSION['personid'] = $userName;
									$_SESSION['usertype'] = "S";
									header("location:studenthomepage.php");
								}
								else 
								{	
							?>
									<div class="alert-box error">
									<?php echo "Invalid Login Credentials";  ?>
									</div>
							<?php 
								}
							}

							?>
							


							<header id="header">
								<div class="register-form">
								
									<form action="studentlogin.php" method="post">
									<h3>STUDENT ID</h3>
									<input type="text" name="personid" /><br />
									<h3>PASSWORD</h3>
									<input type="password" name="password" /><br />
									<input type="submit" value="SIGN IN" name="submit"/>
									</form>
								</div>
	`						</header>

							
						</div>

				</div>
			</div>





		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="3u">
						
						
						</div>
						<div class="3u">

						</div>
						<div class="6u">
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								<ul class="menu">
									<li>Copyright &copy; 2015 Internship Tracking System. All rights reserved</li><li>Design: <a href="http://www.facebook.com/nobossforrb">Team Data Warriors</a></li>
							
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>



