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


					<!-- Banner -->
						<div id="banner">
							<header id="header">
								<div class="inner">
									<h1><strong><a href="searchinternshipplacements.php" style="color: white; font-size: 30px;text-align: center">SEARCH INTERNSHIP PLACEMENTS</a></strong></h1>

								</div>	
							</header>


							
							<?php

							$isRow=false;
							if (isset($_POST['search']))
							{

								$personId = $_POST['personid'];
								$internshipId = $_POST['internshipid'];
								$placed = $_POST['placed'];
								
								
								if ($personId==null and $internshipId==null and $placed==null)
								{
							?>
									<div class="alert-box error">
									<?php echo "Please enter valid information!!!"; ?>
									</div>
							<?php
								}
								
								else 
								{
									//SQL STATEMENT USING JOIN
									$sql="SELECT ip.person_id AS PERSON_ID, pd.first_name AS FIRST_NAME, pd.last_name AS LAST_NAME, ip.internship_id AS INTERNSHIP_ID, bd.company_name AS COMPANY_NAME, ip.placed AS PLACED FROM person_details AS pd JOIN intern_placements AS ip JOIN internship_opportunities AS io JOIN business_details AS bd ON ip.person_id=pd.person_id AND ip.internship_id=io.internship_id AND io.company_id=bd.company_id WHERE ";
									
									if ($personId!=null)
									{
										$sql = $sql."ip.person_id='$personId'";
										if ($internshipId!=null || $placed!=null)
										{
											$sql = $sql." and ";
										}
									}
	
									if ($internshipId!=null)
									{
										$sql = $sql."ip.internship_id='$internshipId'";
										if ($placed!=null)
										{
											$sql = $sql." and ";
										}
									}	
									
									if ($placed!=null)
									{
										$sql = $sql."ip.placed='$placed'";
									}
				
									$result = mysqli_query ( $dbcon, $sql );
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
										$isRow=true;
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
									    <option value="Interview_in_Progress">Interview in progress</option>
									</select>
									<input type="submit" value="SEARCH" name="search"/>
									</form>
								</div>
	`						</header>					
						</div>

				</div>
			</div>

			<?php 
			if ($isRow==true)
			{
			?>
			<div>
				<table style="border: 2px solid red; text-align: center; border-collapse: collapse;">
					<tr style="font-size: 20px; font-weight: bold; color: white">
						<th style="border: 1px solid white;">Student ID</th>
						<th style="border: 1px solid white;">First Name</th>
						<th style="border: 1px solid white;">Last Name</th>
						<th style="border: 1px solid white;">Internship ID</th>
						<th style="border: 1px solid white;">Company Name</th>
						<th style="border: 1px solid white;">Placed</th>
					</tr>
					<?php 
					while($row=mysqli_fetch_assoc($result))
					{
					?>
					<tr style="border: 1px solid red; color: white">
						<td style="border: 1px solid white;"><?php echo $row['PERSON_ID']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['FIRST_NAME']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['LAST_NAME']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['INTERNSHIP_ID']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['COMPANY_NAME']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['PLACED']; ?></td>
					</tr>
					<?php 						
					}						
					?>
	
				</table>
				

			</div>		
			<?php 						
			}						
			?>
			
			
			
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



