<!-- Created by Rakesh Balan Lingakumar -->


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
				opacity:0.8;
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
			<div id="header-wrapper" style="height: 800px">
			
				<div class="container">
						<header id="welcomeheader">
							<div class="welcomeinner">							
							
							
							<?php
							
							
							if(isset($_SESSION['personid']) && isset($_SESSION['usertype']))
							{
								if($_SESSION['usertype']=='A')
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
										$_SESSION['adminname'] = "WELCOME ".$salutation." ".$row['first_name']." ".$row['middle_name']." ".$row['last_name'];
									}
								}
								
								else 
								{	
									header("location:logout.php");
								}
							}
							else
							{
								header("location:adminlogin.php");
							}
							?>

							</div>
						</header>
					<!-- Header -->
						<header id="header">
							<div class="inner">
							
								<!-- Logo -->
									<h1><a href="adminhomepage.php" id="logo">INTERNSHIP TRACKING SYSTEM</a></h1>
								
								<!-- Nav -->
									<nav id="nav">
										<ul>
											<li class="current_page_item"><a href="#">ADMIN TASKS <span class="arrow">&#9660;</span></a>
 
											<ul class="sub-menu">
											<li><a href="#">INTERNSHIPS <span class="arrow">&#9658;</span></a>
												<ul>
													<li><a href="searchinternship.php">Search Internships</a></li>
													<li><a href="addinternship.php">Add Internship</a></li>
													<li><a href="deleteinternship.php">Delete Internship</a></li>
												</ul>
											</li>
											<li><a href="#">PLACEMENTS <span class="arrow">&#9658;</span></a>
												<ul>
													<li><a href="searchinternshipplacements.php">Search Internship Placements</a></li>
													<li><a href="updateinternshipplacements.php">Update Internship Placements</a></li>
												</ul>
											</li>
											<li><a href="#">STUDENT SKILLS <span class="arrow">&#9658;</span></a>
												<ul>
													<li><a href="searchstudentswithskills.php">Search Students by Skills </a></li>
													<li><a href="searchstudentskills.php">Search Skills of a Student</a></li>
												</ul>
											</li>
											<li><a href="#">EVALUATION <span class="arrow">&#9658;</span></a>
												<ul>
													<li><a href="searchevaluation.php">Check Evaluation turn-in status </a></li>
													<li><a href="updateevaluation.php">Update Evaluation turn-in status</a></li>
												</ul>
											</li>
											</ul></li>
											<li class="current_page_item"><a href="aboutus.php">ABOUT US</a></li>
											<li class="current_page_item"><a href="contactus.php">CONTACT US</a></li>
											<li class="current_page_item"><a href="logout.php">LOGOUT</a></li>
										</ul>
									</nav>
							
							</div>
						</header>

						<div class="transbox">
							<p>As an ADMIN, you can search, add and delete internship details, update evaluation turn-in status of students and can search for students with specific set of skills.</p>
						</div>
						

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



