<?php
include ("db.php");
session_start();
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
			<div id="header-wrapper" style="height: 800px">
			
				<div class="container">
						<header id="welcomeheader">
							<div class="welcomeinner">							
							
							
							<?php
							
							
							if(isset($_SESSION['personid']) && isset($_SESSION['usertype']))
							{
								if($_SESSION['usertype']=='S')
								{
									$personId=$_SESSION['personid'];

									$sqlRetrieveName = "SELECT first_name, middle_name, last_name, gender FROM person_details WHERE person_id='$personId'";
									$result = mysqli_query ( $dbcon, $sqlRetrieveName );
									if($row=mysqli_fetch_assoc($result))
									{
										if ($row['gender'] == 'M')
										{
											$salutation="Mr.";
										}
										else if ($row['gender'] == 'F')
										{
											$salutation="Ms.";
										}
									?>
									<h1><?php echo "WELCOME ".$salutation." ".$row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?></h1>
									
		
									<?php 
										$_SESSION['studentname'] = "WELCOME ".$salutation." ".$row['first_name']." ".$row['middle_name']." ".$row['last_name'];
									}
								}
								
								else 
								{	
									header("location:logout.php");
								}
							}
							else
							{
								header("location:studentlogin.php");
							}
							?>

							</div>
						</header>
					<!-- Header -->
						<header id="header">
							<div class="inner">
							
								<!-- Logo -->
									<h1><a href="studenthomepage.php" id="logo">INTERNSHIP TRACKING SYSTEM</a></h1>
								
								<!-- Nav -->
									<nav id="nav">
										<ul>
											<li class="current_page_item"><a href="search-page.php">SEARCH INTERNSHIP</a></li>
											<li class="current_page_item"><a href="aboutus.php">ABOUT US</a></li>
											<li class="current_page_item"><a href="contactus.php">CONTACT US</a></li>
											<li class="current_page_item"><a href="logout.php">LOGOUT</a></li>
										</ul>
									</nav>
							
							</div>
						</header>


						

					<!-- Banner -->
						<div id="banner">


							
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



