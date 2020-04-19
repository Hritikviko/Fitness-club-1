<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<!-- Set the viewport of the page, which will give the browser instructions on how to control the page's dimensions and scalling-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!--Create an icon on the browser tab-->
			<link rel="icon" type="image/x-icon" href="media/club_icon.png"/>
			<title>Motivation Sport &amp; Fitness Club - Contact Us</title>
			<!--link to the external style sheet called styles.css-->
			<link rel="stylesheet" href="styles.css">
			<!--link to the external JavaScript File called assignment_js.js
			<script src="assignment_js.js"></script>-->
			<!--Add in online icon library-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<!--Adding the PHP source to process the form elements -->
		<!--
			========== HTML5 Browser Support ==========
			- HTML5 defines eight new semantic elements (block-level elements)
			- IE8 (or earlier versions) doesn't allow styling of unknown elements
			- By using HTML5Shiv created by Sjoerd Visscher, which is a JavaScript workaround to enable styling of HTML5 elements in versions of Internet Explorer prior to version 9
			- It provides compatibility for the IE Browsers older than IE 9
		-->

			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<![endif]-->
		
		</head>
			<body>
				<!--===== Whole page section =====-->
				<div class="page" id="whole_page">
					<!--===============================
								Header Section
					=================================-->
					<!--Testing for the fixed header-->
					<header class="page-header">
						<section class="header-background">
						<div class="border-header" id="border-header">
							<div class="left-header" id="icon_link_homepage">
								<!--Create a header icon with home page link at the left hand side-->
								<a href="main_page.html" title="Back to Home Page">
									<img src="media/MotivationLogo.png" alt="Motivation Sport & Fitness Club" id="logo"/>
								</a>
							</div>
							<!--Create a Contact with tel and email-->
							<div class="right-header" id="contact_info">
									<div style="color:white;">
										<br>
										<h4 style="margin-bottom:10px;">Contact:</h4>
										Tel:<a href="tel:01-23456789" id="contact-number" title="Tel">01-23456789</a> | <a href="mailto:motivation@sportandfitness.ie" id="email" title="Email">motivation@sportandfitness.ie</a>
									</div>
							</div>
						</div>
						</section>
					</header>
					<!--=====End of header setting=====-->
					
					<!--=====Navigation Start=====-->
						<div class="navigation" id="navigation_menu">
							<a href="main_page.html">Home Page</a>
							<a href="gallery.html">Gallery</a>
							<a href="fitness-class-table.html">Fitness Class Timetable</a>
							<a href="location.html">Location</a>
							<a href="membership.html">Membership</a>
							<a href="contact_us.html">Contact Us</a> 
						</div>
					<!--======Navigation End=====-->
					
				<!--Web Page Title-->
				<section class="background-blank-page">
					<h2 id="top-title"><b>Motivation Sport and Fitness Club</b></h2>
			
					
			<div class="row">		
				<div class="columns" id="form-block">
					<h2 style="text-align: left;">Contact Form</h2>
					<div class="form-container">
					<?php
						// used to fix the White Screen of Death, to find the concrete error in the error log
						ini_set('display_errors', 1); error_reporting(~0);

						// define variables and set to empty values
						$fnameErr = $snameErr = $telErr = $emailErr = $messageErr = "";
						$firstname = $surname = $tel = $email = $message = "";
					/*	
						// connect to server 
						$connection_var = new mysqli('localhost','student','comp20030','assignment');
						
						// if the statement of the connection to the server is having error is true
						if(mysqli_connect_errno())
						{
							printf("Connection failed : %s\n",mysqli_connect_error);
							exit(); // exit the MySQL database
						}
					*/	
						
						
						// function to test the input data from the user
						function test_input($data){
									$data = trim($data); 
									// function to removes whitespace and other predefined characters from both sides of a string
									$data = stripslashes($data);
									// function to clean up data retrieved from the HTML form
									$data = htmlspecialchars($data);
									// function to converts some predefined characters to HTML entities, eg & (char) to &amp; (HTML)
									return $data;
							}
	
						echo"<h2>Your information:</h2>";
						if($_SERVER["REQUEST_METHOD"]=="POST"){
	
							if(empty($_POST["firstname"])){
									$fnameErr = "First Name is required";
							}
							else{
								$firstname = test_input($_POST["firstname"]);
								
								if(!preg_match("/^[a-zA-Z ]*$/",$firstname)) 
								{
									$fnameErr = "Only letters and white space allowed in this bracket";
								}else{
									echo "Your input first name : ";
									echo $firstname;
									echo "<br>";
								}
							}
	
							if(empty($_POST["surname"])){
									$snameErr = "Last Name is required";
							}
							else{
								$surname = test_input($_POST["surname"]);
								
								if(!preg_match("/^[a-zA-Z ]*$/",$surname))
								{
									$snameErr = "Only letters and white space allowed in this bracket";
								}else{
									echo "Your input last name : ";
									echo $surname;
									echo "<br>";
								}
							}
	
							if(empty($_POST["phone-number"])){
									$telErr = "Your phone number is required";
							}
							else{
									$tel = test_input($_POST["phone-number"]);
									
									if(!preg_match('/^([0-9]+)$/', $tel)){
										$telErr = "Only numbers(integer) are allowed in this bracket";
									}
									else{
										echo "Your input phone number : ";
										echo $tel; 
										echo "<br>";
									}
							}
	
							if(empty($_POST["customers-email"])){
									$emailErr = "Name is required";
							}
							else{
								$email = test_input($_POST["customers-email"]);
								
								if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
										$emailErr = "Invalid email format";
								}
								else{
									echo "Your input email address: ";
									echo $email;
									echo "<br>";
								}
							}
	
							if(empty($_POST["message"])){
								$messageErr = "Your message is required here";
							}
							else{
									$message = test_input($_POST["message"]);
									echo "Your input message: ";
									echo $message;	
									echo "<br>";
								}
							}
							
					?>
					
						<p class="respond-message">Thanks for your questions and we will contact you as soon as possible according to your given contact information</p> 
						
						<!-- Button back to previous page -->
						<a href="contact_us.html" title="Back to previous page">
							<div class="button" style="vertical-align:middle;margin:5px;"><span>Back</span></div>
						</a>
					</div>
				</div>
				<div class="columns" id="text-block" >
					<div class="container" style="font-size:20px;width: 90%;margin-left:0px;">
						<div style="background-color:#ff5c33;color:#ffffff;padding:10px 30px;border-radius:8px;">
							<h3 style="text-align:left;text-decoration:underline;">Contact</h3>
							<p>If you have any questions please use the details below or the web form provided to contact us, and a member of our team will get right back to you.</p>
						</div>	
					
						<p style="font-size:20px;"><b>Motivation Sport and Fitness Club, Churchtown Road, Dublin 8</b></p>
						
						<p id="contact-information" style="color:#737373">
							Telephone&nbsp;:<a href="tel:01-23456789" id="phone-number" title="Contact Phone Number">&nbsp;01 23456789</a><br>
							FAX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="fax:01-011112134" id="fax-number" title="Fax Number">01 01112134</a><br>
							E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="mailto:motivation@sportandfitness.ie" id="contact-email" title="Email">motivation@sportandfitness.ie</a><br>
						</p>
					</div>
				</div>
			</div>
				</section> <!--End of White Page-->
			</div><!-- End of Content Page -->
				
				
					<!--=====Footer=====-->
					<footer>
					<div class="row">
						<div class="columns" id="footer-address">
								<address>
								Motivation Sport and Fitness Club, Churchtown Road, Dublin 8<br>
								Tel: 0123456789
								</address>
						</div>
							
						<div class="columns" id="footer-opening-hours">
								Opening Hours:<br>
								Monday - Friday: 7AM - 10PM<br>Saturday - Sunday: 9AM - 8PM<br>Bank Holidays: 10AM - 8PM<br>
						</div>
						<div class="social-media-icon columns" id="social-media"> 
							<!--Footer Icons link to the official social media page, and open in the new tab-->
							<a href="https://www.facebook.com/" class="fa fa-facebook" target="_BLANK"></a>
							<a href="https://twitter.com/" class="fa fa-twitter" target="_BLANK"></a>
							<a href="https://www.instagram.com/" class="fa fa-instagram" target="_BLANK"></a>
							<p style="font-size: 20px;">
								&#169; <span id="copyright-year">2018 | </span>
								<a href="privacypolicy.htm" id="privacy-policy" target="_BLANK">Privacy Policy</a>
							</p>
						</div>
						</div>
					</footer>
			</body>
	</html>