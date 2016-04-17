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
									<h1><strong style="color: white; font-size: 30px;text-align: center">SEARCH STUDENT BY SKILLS</strong></h1>

								</div>	
							</header>


							
							<?php
							$isRow=false;
							if (isset($_POST['search']))
							{
                                 $skills = $_POST['skills'];
								if ($skills==null)
								{
							?>
									<div class="alert-box error">
									<?php echo "Please enter Skills!!"; ?>
									</div>
							<?php
								}
								
								else 
								{							
									$sql = "SELECT STDT.PERSON_ID,PD.FIRST_NAME,PD.LAST_NAME,STDT.MAJOR,DEPT.DEPARTMENT_NAME FROM its_data_warriors.SKILLS_DETAILS SD,
									its_data_warriors.STUDENT_SKILL STSK, its_data_warriors.PERSON_DETAILS PD,its_data_warriors.STUDENT_DETAILS STDT,its_data_warriors.DEPARTMENT_DETAILS DEPT
								    WHERE SD.SKILL_NAME = '$skills' AND SD.SKILL_ID = STSK.SKILL_ID AND STSK.PERSON_ID = STDT.PERSON_ID AND 
									STDT.PERSON_ID = PD.PERSON_ID AND STDT.DEPARTMENT_ID = DEPT.DEPARTMENT_ID";
									$result = mysqli_query($dbcon, $sql);
									$count = mysqli_num_rows($result);
								
									if($count == 0)
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
									<h3>SKILLS</h3>
									<input type="text" name="skills" />
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
					  echo "Student With Skill : ".$skills;
				  	
                ?>				
			</h1>

			</div>	
			<div>
				<table style="border: 2px solid red; text-align: center; border-collapse: collapse;">
					<tr style="font-size: 20px; font-weight: bold; color: white">
						<th style="border: 1px solid white;">STUDENT ID</th>
						<th style="border: 1px solid white;">FIRST NAME</th>
						<th style="border: 1px solid white;">LAST NAME</th>
						<th style="border: 1px solid white;">MAJOR</th>
						<th style="border: 1px solid white;">DEPARTMENT</th>
					</tr>
					<?php 
					while($row=mysqli_fetch_assoc($result))
					{
					?>
					<tr style="border: 1px solid red; color: white">
						<td style="border: 1px solid white;"><?php echo $row['PERSON_ID']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['FIRST_NAME']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['LAST_NAME']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['MAJOR']; ?></td>
						<td style="border: 1px solid white;"><?php echo $row['DEPARTMENT_NAME']; ?></td>
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



