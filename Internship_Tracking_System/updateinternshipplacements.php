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
		
	</head>
	<body class="firstpage">



		<!-- Header -->
			<div id="header-wrapper">
			
				<div class="container">
						<header id="welcomeheader">
							<div class="welcomeinner">							
							
							

							<h1><?php echo $_SESSION['adminname'] ?></h1>
							


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
													<li><a href="#">Update Internship</a></li>
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
													<li><a href="#">Search Students by Skills </a></li>
													<li><a href="searchstudentskills.php">Search Skills of a Student</a></li>
												</ul>
											</li>
											<li><a href="#">EVALUATION <span class="arrow">&#9658;</span></a>
												<ul>
													<li><a href="#">Check Evaluation turn-in status </a></li>
													<li><a href="#">Update Evaluation turn-in status</a></li>
												</ul>
											</li>
											</ul></li>
											<li class="current_page_item"><a href="adminhomepage.php">HOME</a></li>
											<li class="current_page_item"><a href="aboutus.php">ABOUT US</a></li>
											<li class="current_page_item"><a href="contactus.php">CONTACT US</a></li>
											<li class="current_page_item"><a href="logout.php">LOGOUT</a></li>
										</ul>
									</nav>
							
							</div>
						</header>


					<!-- Banner -->
						<div id="banner">
							<header id="header">
								<div class="inner">
									<h1><strong><a href="updateinternshipplacements.php" style="color: white; font-size: 30px;text-align: center">UPDATE INTERNSHIP PLACEMENTS</a></strong></h1>

								</div>	
							</header>


							
							<?php


							if (isset($_POST['update']))
							{

								$personId = $_POST['personid'];
								$internshipId = $_POST['internshipid'];
								$placed = $_POST['placed'];
								
								
								if ($personId==null || $internshipId==null || $placed==null)
								{
							?>
									<div class="alert-box error">
									<?php echo "Please enter valid information!!!"; ?>
									</div>
							<?php
								}
								
								else 
								{
									//Validation
									$sql="SELECT * FROM intern_placements WHERE person_id='$personId' AND internship_id='$internshipId' AND placed='Interview_in_Progress'";														
									$result = mysqli_query($dbcon, $sql);
									$count = mysqli_num_rows($result);

									
									if ($count == 0)
									{
							?>
										<div class="alert-box error">
										<?php echo "No Results Found!!!"; ?>
										</div>
							<?php 
									}
									
									else 
									{
										//SQL STATEMENT USING TRIGGER
										$sql="UPDATE intern_placements SET placed='$placed' WHERE person_id='$personId' AND internship_id='$internshipId'";
										$result = mysqli_query($dbcon, $sql);
										if ($result==1)
										{				
											if($placed=='Y')
											{
												$sql="SELECT number_of_openings_left from internship_opportunities where internship_id='$internshipId'";
												$result = mysqli_query($dbcon, $sql);
												if($row=mysqli_fetch_assoc($result))
												{
													$number_of_openings_left=$row['number_of_openings_left'];
												}
												
												$number_of_openings_left=$number_of_openings_left-1;
												
												$sql="UPDATE internship_opportunities SET number_of_openings_left='$number_of_openings_left' WHERE internship_id='$internshipId'";
												$result = mysqli_query($dbcon, $sql);
											}
											
							?>
											<div class="alert-box error">
											<?php echo "Details Successfully Updated!!!"; ?>
											</div>
							<?php 
										}
										
									}
								}
							}
										
										
							?>

							
							


							<header id="header">
								<div class="register-form">
								
									<form action="" method="post">
									<h3>STUDENT ID</h3>
									<input type="text" name="personid" />
									<h3>INTERNSHIP ID</h3>
									<input type="text" name="internshipid" />
									<h3>PLACED</h3>
									<select name="placed">
										<option value=""> Select </option>
									    <option value="Y">Yes</option>
									    <option value="N">No</option>
									</select>
									<input type="submit" value="UPDATE" name="update"/>
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



