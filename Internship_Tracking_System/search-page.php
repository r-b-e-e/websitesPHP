<?php
include ("db.php");
session_start();
?>
<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Search Internships</title>
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

											<li class="current_page_item"><a href="logout.php">LOGOUT</a></li>
											
											
										</ul>
									</nav>
							
							</div>
						</header>

				</div>
			</div>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="wrapper style2" style="padding: 5em 0 4em 0;>
					<div class="inner">
						<div class="container">
							<div class="row">
								
								<div class="8u important(collapse)" style="padding: 0 0 0 50px">
								<form action="" method="post">
									<div id="content">

										<!-- Content -->
									
											<article>
												<header class="major">
													<h2>Internship Search</h2>
													<!--<p>Which means the sidebar is on the left</p>-->
												</header>
												
												<div class="pad-right fleft" style="padding: 0 30px 0 0">
													<div><label for="internshipType">Internship Type: </label></div>
													<div>
														<select id="internshipType" name="internshipType">
														    <option value="">--select--</option>
													  		<option value="P">Paid</option>
                                                      		<option value="NP">Unpaid</option>

                                                    	</select>
													</div>
												</div>
												<br/>
												<div class="pad-right fleft" style="padding: 0 30px 0 0">
                                                    <div><label for="ExpireDate">Due Date (YYYY-MM-DD): </label></div>
                                                    <div>
                                                    	<input id="ExpireDate" name="ExpireDate" type="text" value="">
                                                    </div>    
												</div>
												<br/>
												<div class="pad-right fleft" style="padding: 0 30px 0 0">
                                                    <div><label for="companyname">Organization name: </label></div>
                                                    <div>
                                                    	<input id="companyname" name="companyname" type="text" value="">
                                                    </div>    
												</div>
												<br/>
												<div class="pad-right fleft" style="padding: 0 30px 0 0">
                                                    <div><label for="joblocation">Job Location: </label></div>
                                                    <div>
                                                    	<input id="joblocation" name="joblocation" type="text" value="">
                                                    </div>    
												</div>
	
												<div class="pad-right fleft">
												<input type="submit" value="Search" name="Search" id="search-button" class="button alt icon fa-file-o"/>
													 <!-- <a href="search-page.php?display=<?php echo $row['internship_id']?>" id="search-button" class="button alt icon fa-file-o searchlink" style="padding: 5px 10px;">Search</a>  -->
												</div>

												<footer>
												</footer>
												
											</article>
								
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="wrapper style3" style="padding: 70px 0;">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="8u" style="padding:0 0 0 50px" id="searchresult">

									<!-- Article list -->
										<section class="box article-list">
											<h2 class="icon fa-file-text-o">Available Internships</h2>
						<?php

							if (isset($_POST['Search']))
							{
								$expiredate = $_POST['ExpireDate'];
							    $companyname = $_POST['companyname'];
							    $joblocation = $_POST['joblocation'];
							    $internshipType = $_POST['internshipType'];
							}
							else
							{
						  	 	$expiredate = null;
							    $companyname = null;
							    $joblocation = null;
							    $internshipType = null;
							}
							
							if ($expiredate==null && $companyname==null && $joblocation==null && $internshipType==null)
								{						
									
																
								$sql = "SELECT io.internship_id, io.job_title, io.job_location, io.due_date, io.start_date, bd.company_name FROM internship_opportunities AS io JOIN business_details AS bd ON io.company_id=bd.company_id ORDER BY job_title ASC";
								$result = mysqli_query($dbcon, $sql);
								$count = mysqli_num_rows($result);
								}
							else
								{
								

								$sql="SELECT io.internship_id, io.job_title, io.job_location, io.due_date, io.start_date, bd.company_name
								 FROM internship_opportunities AS io LEFT JOIN business_details AS bd 
								 ON io.company_id=bd.company_id WHERE ";
									
									if ($expiredate!=null)
									{
										$sql = $sql."io.due_date <= '$expiredate'";
										if ($joblocation!=null || $internshipType!=null || $companyname!=null)
										{
											$sql = $sql." OR ";
										}
									}
	
									if ($joblocation!=null)
									{
										$sql = $sql."io.job_location LIKE '%$joblocation%'";
										if ($companyname!=null || $internshipType!=null)
										{
											$sql = $sql." OR ";
										}
									}	

									if ($companyname!=null)
									{
										$sql = $sql."bd.company_name LIKE '%$companyname%'";
										if ($internshipType!=null)
										{
											$sql = $sql." OR ";
										}
									}	
									
									if ($internshipType!=null)
									{
										$sql = $sql."io.internship_type = '$internshipType'";
									}
				
												
									$result = mysqli_query($dbcon, $sql);
									$count = mysqli_num_rows($result);

							
							}
							
							
								
								if ($count > 0)
								{
								while ($row = mysqli_fetch_assoc($result))
								{

								?>

				
											
											<!-- Excerpt -->
												<article class="box excerpt">
													
													<div>
														<header>
															
															<h3><a href="internship_detail.php?varname=<?php echo $row['internship_id']?>"><?php echo $row['internship_id']."/".$row['job_title']?></a></h3>
														</header>
														<div>
															<div class="job-box">
																<span class="date" >Due Date:</span>
																	<?php echo $row['due_date']?>
																	
															</div>
															<div  class="job-box"><span class="date" >Company Name:</span>
																	<?php echo $row['company_name']?>
															</div>
															<div  class="job-box"><span class="date" >Job Location(City,State):</span>
																	<?php echo $row['job_location']?>
															</div>
															<div  class="job-box">
																<span class="date" >Start Date:</span>
																	<?php echo $row['start_date']?>
															</div>
															
															
														</div>
													</div>
												</article>

								<?php	
									}
									}
									else
									{
										?>
										<div class="alert-box error">
									<?php echo "No Internship Available"; ?> 
									</div>
										<?php
									}
								?>
									
							
												
										</section>
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