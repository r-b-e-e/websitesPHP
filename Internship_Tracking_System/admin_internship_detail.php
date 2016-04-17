<!-- Created by Rakesh Balan Lingakumar -->


<?php
$internshipId=$_GET['varname'];

include ("db.php");
//session_start();


$internship = 'SELECT io.number_of_openings_left,io.weekly_hours_required,io.job_title,io.job_requirements,io.job_duties,io.pay_per_hour,bd.company_name,sd.email 
               FROM internship_opportunities AS io LEFT JOIN business_details AS bd
               ON io.company_id=bd.company_id
               INNER JOIN supervisor_details AS sd
               ON io.supervisor_id=sd.supervisor_id
               WHERE io.internship_id = "'.$internshipId.'"';
								
								$result = mysqli_query($dbcon, $internship);
								$count = mysqli_num_rows($result);
								
								
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
													<li><a href="#">Check Evaluation turn-in status </a></li>
													<li><a href="#">Update Evaluation turn-in status</a></li>
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

				</div>
			</div>
			
	
		
		
		
		
		
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				

				<div class="wrapper style3" style="padding: 70px 0;">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="8u" style="padding:0 0 0 50px;">
<?php
if ($count ==1)
								{
									while ($row = mysqli_fetch_assoc($result))
								{
?>
									<!-- Article list -->
										<section class="box article-list">
											<h2 class="icon fa-file-text-o" style="text-transform:none">General Information</h2>
						
											
											<!-- Excerpt -->
												<article>
												<header class="major">
													<h2><?php echo $internshipId."/".$row['job_title']?></h2>
												</header>
												
                                                <div class="job-box"><b>Company name:</b></div>
												<div><?php echo $row['company_name']?></div>
                                                <br>
												<div class="job-box"><b>No of Openings Left:</b></div>
												<div><?php echo $row['number_of_openings_left']?></div>
                                                <br>
                                                <div class="job-box"><b>Wage/​Salary:</b></div>
                                                <div><p><?php echo $row['pay_per_hour']?> hr</p></div>
                                                
												<div class="job-box"><b>Hours per Week:</b></div>
												<div><?php echo $row['weekly_hours_required']?></div>
												<br>
												
													<div class="job-box"><b>Job requirements:</b></div>
												<div><p>The preferable profile would be <?php echo $row['job_requirements']?></p></div>

												<div class="job-box"><b>Job Description:</b></div>
												<div><p>The work involved would be <?php echo $row['job_duties']?></p></div>
												<div class="job-box"><b>Supervisor email-id:</b></div>
												<div><?php echo $row['email']?></div>
												
												
												<h3>More intriguing information</h3>
												<p>The ideal candidate will be prepared to use technology as a part of their tutoring
												 sessions and willing to research technology-based resources or applicants to enhance
												 tutoring to enhance tutoring sessions.Undergraduate student applicants must have earned
												 at least 29 semester hours before tutoring. Excellent interpersonal skills and a mastery
												 of communicating clearly and comprehensively in English are also a prerequisite.  </p>

												
												
											</article>
											
											
											

											
																
							
												
										</section>
										<?php
									}
									}
					
									?>
								</div>
								<div class="4u">
								
							
										
								
								</div>
							</div>
						</div>
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
									<li>&copy; Untitled. All rights reserved</li><li>Design: <a href=>Data Warriors</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>


	</body>
</html>