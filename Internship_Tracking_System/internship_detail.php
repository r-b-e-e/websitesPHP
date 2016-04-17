<!-- Created by Rakesh Balan Lingakumar -->


<?php
$internshipId=$_GET['varname'];

include ("db.php");
session_start();


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
		<title>Apply Internship</title>
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
	<body class="left-sidebar">
			
		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
						
					<!-- Header -->
						<header id="header">
							<div class="inner">
							
								<!-- Logo -->
									<h1><a href="studenthomepage.php" id="logo"><font size="5">Internship Tracking System</font> </a></h1>
								
								<!-- Nav -->
									<nav id="nav">
										<ul>
											
											
											<li><a href="search-page.php"><font size="3">BACK</font></a></li>																					
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

												
												<a href="check.php?varname=<?php echo $internshipId?>" id="search-button" class="button alt icon fa-file-o" style="padding: 5px 10px;" >Apply For Internship</a>
											</article>
											
											
											

											
																
							
												
										</section>
										<?php
									}
									}
					
									?>
								</div>
								<div class="4u">
								
									<!-- Spotlight -->
										
								
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