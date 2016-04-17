<!-- Created by Rakesh Balan Lingakumar -->


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

		
		<style>
			div.transbox
			{
				margin: 30px;
				background-color: #ffffff;
				border: 1px solid black;
				opacity:0.4;
				filter:alpha(opacity=60); /* For IE8 and earlier */
			}
			div.transbox p
			{
				margin: 5%;
				font-weight: bold;
				color: #000000;
			}
	</style>
		
	</head>
	<body class="firstpage">

		<!-- Header -->
			<div id="header-wrapper">
				<div class="container">

					<!-- Header -->
						<header id="header">
							<div class="inner">
							
								<!-- Logo -->
									<h1><a href="studenthomepage.php" id="logo">INTERNSHIP TRACKING SYSTEM</a></h1>
								
								<!-- Nav -->
									<nav id="nav">
										<ul>
											<li class="current_page_item"><a href="search-page.php">SEARCH INTERNSHIP</a></li>
											<li class="current_page_item"><a href="logout.php">LOGOUT</a></li>
										</ul>
									</nav>
							
							</div>
						</header>
						
						<?php
include ("db.php");
session_start();



									$person_id = $_SESSION['personid'];	
									$internship_Id=$_GET['varname'];
									$sql = "SELECT current_semester, student_level  FROM student_details WHERE person_id = '$person_id'";
									$result = mysqli_query($dbcon, $sql);
									$count = mysqli_num_rows($result);
									
									
									while ($row = mysqli_fetch_assoc($result))
									{
										$currentSemester = $row['current_semester'];
										$studentLevel = $row['student_level'];
									}

	

										if($count==1 && $currentSemester >= 03 && $studentLevel=="Under-Graduate")
										{
										$query = "INSERT INTO intern_placements(person_id,internship_id,placed) VALUES ('$person_id','$internship_Id','Interview_in_Progress') ";
										$result = mysqli_query($dbcon,$query);?>
										<div class="transbox" align="center">
											<p>Successfully Applied</p>
										</div>
										<?php
										}
										else
										{
											?>
											<div class="transbox" align="center">
											<p>
											<?php
											echo "Internship ". $internship_Id . " cannot be applied as you didn't meet one or more Pre-requisite";
											?>
											</p>
											</div>
										<?php
										}
										?>
						
						

					<!-- Banner -->
						<div id="banner">
							<br/>							
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
						</div>

				</div>
			</div>

				

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="12u">
							<div id="copyright">
								<ul class="menu">
									<li>Copyright &copy; 2015 Internship Tracking System. All rights reserved</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>