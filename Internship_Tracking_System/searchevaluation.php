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
									<h1><strong style="color: white; font-size: 30px;text-align: center">CHECK EVALUATION STATUS</strong></h1>

								</div>	
							</header>


							
							<?php

							$isRow=false;
							if (isset($_POST['search']))
							{
                                 $personId = $_POST['personId'];
								 $internId = $_POST['internshipId'];
								if ($personId==null || $internId==null)
								{
							?>
									<div class="alert-box error">
									<?php echo "Please enter valid information!!!"; ?>
									</div>
							<?php
								}
								
								else 
								{	
									$sql1="SELECT first_name, middle_name, last_name FROM person_details WHERE person_id='$personId'";
									$sql2="SELECT company_name FROM business_details WHERE company_id=(SELECT company_id FROM internship_opportunities WHERE internship_id='$internId')";
									$sql3="SELECT supervisor_evaluation, student_evalution, comments FROM evaluation WHERE person_id='$personId' AND internship_id='$internId'";
							        $result1 = mysqli_query($dbcon, $sql1);
							        $result2 = mysqli_query($dbcon, $sql2);
							        $result3 = mysqli_query($dbcon, $sql3);
									$count1 = mysqli_num_rows($result1);
									$count2 = mysqli_num_rows($result2);
									$count3 = mysqli_num_rows($result3);
								
									if($count1 == 0 || $count2 == 0 || $count3 == 0)
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
									<input type="text" name="personId" />
									<h3>INTERNSHIP ID</h3>
									<input type="text" name="internshipId" />
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
			<div class="inner">
				<h1 style="color: white; font-size: 20px;text-align: center">
	            <?php                
					  echo "Student Id : ".$personId." ------- "."Internship Id :".$internId;
				  	  
				  	  $row1=mysqli_fetch_assoc($result1);
				  	  $row2=mysqli_fetch_assoc($result2);
				  	  $row3=mysqli_fetch_assoc($result3);
                ?>				
			</h1>

			
			<div>
				<table style="border: 2px solid red; text-align: center; border-collapse: collapse;">
					<tr style="font-size: 20px; font-weight: bold; color: white">
						<th style="border: 1px solid white;">FIRST NAME</th>
						<th style="border: 1px solid white;">MIDDLE NAME</th>
						<th style="border: 1px solid white;">LAST NAME</th>
						<th style="border: 1px solid white;">COMPANY NAME</th>
						<th style="border: 1px solid white;">SUPERVISOR EVALUATION</th>
						<th style="border: 1px solid white;">STUDENT EVALUATION</th>
						<th style="border: 1px solid white;">COMMENTS</th>
					</tr>

					<tr style="border: 1px solid red; color: white">
						<td style="border: 1px solid white;"><?php echo $row1['first_name']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row1['middle_name']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row1['last_name']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row2['company_name']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row3['supervisor_evaluation']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row3['student_evalution']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row3['comments']; ?></td>
					</tr>
			
	
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



