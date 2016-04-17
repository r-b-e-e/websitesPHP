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
									<h1><strong><a href="addinternship.php" style="color: white; font-size: 30px;text-align: center">ADD INTERNSHIP</a></strong></h1>

								</div>	
							</header>


							
							<?php
							
							$companyArray=array();
							
							$sql="Select company_name from business_details";
							$result = mysqli_query ( $dbcon, $sql );
							while($row=mysqli_fetch_assoc($result))
							{
								 $companyArray[]=$row['company_name'];
							}
							

								
							
							if (isset($_POST['Add']))
							{
								
								$companyname = $_POST['companyname'];
								$jobtitle = $_POST['jobtitle'];
								$joblocation = $_POST['joblocation'];
								$jobrequirements = $_POST['jobrequirements'];
								$jobduties = $_POST['jobduties'];
								$internshiptype = $_POST['internshiptype'];
								$payperhour = $_POST['payperhour'];
								$duedate = $_POST['duedate'];
								$startdate = $_POST['startdate'];
								$enddate = $_POST['enddate'];
								$weeklyhoursrequired = $_POST['weeklyhoursrequired'];
								$semester = $_POST['semester'];
								$totalopenings = $_POST['totalopenings'];
						
								

								
								
								
								if ($companyname==null || $jobtitle==null || $joblocation==null || $jobrequirements==null || $jobduties==null || $internshiptype==null || $payperhour==null || $duedate==null || $startdate==null || $enddate==null || $weeklyhoursrequired==null || $semester==null || $totalopenings==null)
								{
							?>
									<div class="alert-box error">
									<?php echo "Please enter valid information!!!"; ?>
									</div>
							<?php
								}
								
								else 
								{
									
									$sql="Select company_id from business_details where company_name='$companyname'";
									$result = mysqli_query ( $dbcon, $sql );
									if($row=mysqli_fetch_assoc($result))
									{
										$companyid=$row['company_id'];
									}
									
									
									$sql="Select supervisor_id from supervisor_details where company_id='$companyid'";
									$result = mysqli_query ( $dbcon, $sql );
									if($row=mysqli_fetch_assoc($result))
									{
										$supervisorid=$row['supervisor_id'];
									}
									
									
									$sql="Select Max(internship_id) AS internship_id from internship_opportunities";
									$result = mysqli_query ( $dbcon, $sql );
									if($row=mysqli_fetch_assoc($result))
									{
										$maxinternshipId_unrefine=$row['internship_id'];
										$length = strlen($maxinternshipId_unrefine);
										$maxinternshipId_inString=substr($maxinternshipId_unrefine,1,$length-1);
										$maxinternshipId_inInteger=(int)$maxinternshipId_inString;
										$newinternshipId_inInteger=$maxinternshipId_inInteger + 1;
										$newinternshipId_inString= (String)$newinternshipId_inInteger;
										$newinternshipId="I".$newinternshipId_inString;
									}
									

									
									
									
									
									
									//SQL STATEMENT USING STORED PROCEDURES
								     $sql = "call add_internship('$companyid', '$supervisorid', '$newinternshipId', '$jobtitle', '$joblocation', '$jobrequirements', '$jobduties', '$internshiptype', '$payperhour', '$duedate', '$startdate', '$enddate', '$weeklyhoursrequired', '$semester', '$totalopenings')";
	                                 $result = mysqli_query($dbcon,$sql);

									if ($result === TRUE)
									 {
							 ?>
									<div class="alert-box success">
									<?php echo "New Internship Added"; ?>
									</div>
							<?php
									 }
									else
									{
										echo "Internship not added";
  									}
										
								}
							}
										
										
							?>

							
							



	
					    	<header id="header">
								<div class="register-form">
								
									<form action="" method="post">

										<h3>COMPANY NAME</h3>
										<select name="companyname">
											<option value="" >-select-</option> 
										<?php 
										foreach($companyArray as $companyArray) 
										{
										?>
										    <option value="<?php echo $companyArray?>" ><?php echo $companyArray ?></option>    
										<?php  
										}	 
										?>
										</select>
										
				
										<h3>JOB TITLE</h3>
										<input type="text" name="jobtitle" />
										<h3>JOB LOCATION</h3>
										<input type="text" name="joblocation" />
										<h3>JOB REQUIREMENTS</h3>
										<input type="text" name="jobrequirements" />
										<h3>JOB DUTIES</h3>
										<input type="text" name="jobduties" />
										
										<h3>INTERNSHIP TYPE</h3>
										<select name="internshiptype">
											<option value="">-select-</option>
										    <option value="P">Paid</option>
										    <option value="NP">Unpaid</option>
										</select>
										
										
										<h3>PAY PER HOUR (eg. 33.33)</h3>
										<input type="text" name="payperhour" />
										<h3>DUE DATE (YYYY-MM-DD)</h3>
										<input type="text" name="duedate" />
										<h3>START DATE (YYYY-MM-DD)</h3>
										<input type="text" name="startdate" />
										<h3>END DATE (YYYY-MM-DD)</h3>
										<input type="text" name="enddate" />
										
										<h3>WEEKLY HOURS REQUIRED (eg. 20.00)</h3>
										<input type="text" name="weeklyhoursrequired" />
										
										<h3>SEMESTER</h3>
										<select name="semester">
											<option value="">-select-</option>
										    <option value="Spring 2015">Spring 2015</option>
										    <option value="Fall 2015">Fall 2015</option>
										    <option value="Spring 2016">Spring 2015</option>
										    <option value="Fall 2016">Fall 2015</option>
										</select>
										
										<h3>TOTAL OPENINGS (eg. 30)</h3>
										<input type="text" name="totalopenings" />

										
 									
										

										
									
									
										
										
										<input type="submit" value="ADD" name="Add"/>
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



