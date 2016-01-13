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
							
							
							<?php
							session_start();
							?>
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
									<h1><strong><a href="deleteinternship.php" style="color: white; font-size: 30px;text-align: center">DELETE INTERNSHIP</a></strong></h1>

								</div>	
							</header>


							
							<?php

							require_once 'db.php';
							$isRow=false;
							
							if (isset($_POST['delete']))
							{
								
								$internshipId = $_POST['internshipid'];
								
								
								if ($internshipId==null)
								{
							?>
									<div class="alert-box error">
									<?php echo "Please enter valid information!!!"; ?>
									</div>
							<?php
								}
								
								else 
								{
									//SQL STATEMENT USING DELETE
									$sql1 = "DELETE FROM internship_skill where internship_id='$internshipId'";
									$result1 = mysqli_query($dbcon,$sql1);
									if($result1 == TRUE)
									{
										$sql2 = "DELETE FROM intern_placements where internship_id='$internshipId'";
										$sql4 = "DELETE FROM evaluation where internship_id='$internshipId'";
										
										$result2 = mysqli_query($dbcon,$sql2);
										$result4 = mysqli_query($dbcon,$sql4);
										if($result2 == TRUE)
										{
											$sql3 = "DELETE FROM internship_opportunities where internship_id='$internshipId'";
                                            $result3 = mysqli_query($dbcon,$sql3);
											if ($result3 === TRUE)
									 		{
												 ?>
															 <div class="alert-box success">
														<?php echo "Record deleted successfully"; ?>
														</div>
												<?php
											}
									 		else
										 	{
												echo "Error: " . $sql3 . "<br>" . $dbcon->error;
  									     	}
										}
									}		
								}
							}
										
										
							?>

							
							


							<header id="header">
								<div class="register-form">
								
									<form action="" method="post">
									<h3>INTERNSHIP ID</h3>
									<input type="text" name="internshipid" />
									
									</select>
									<input type="submit" value="DELETE" name="delete"/>
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
						
						<th style="border: 1px solid white;">Internship ID</th>
						<th style="border: 1px solid white;">Company Name</th>
						
					</tr>
					<?php 
					while($row=mysql_fetch_array($result))
					{
					?>
					<tr style="border: 1px solid red; color: white">
						
						<td style="border: 1px solid white;"><?php echo $row['INTERNSHIP_ID']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['COMPANY_NAME']; ?></td>
						
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



