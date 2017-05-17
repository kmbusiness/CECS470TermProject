#!/usr/local/php5/bin/php-cgi

<!DOCTYPE html>
<html lang="en">
	<p>Student site - not a commercial site.</p>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Info for Dr. John</title>
		<h1>Contact Info</h1>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
		<nav>
			<?php include 'dentist-nav.php';?>
			<ul>
				<li> <a href="drjohn.php"> Home </a> </li>
				<li> <a href="contact.php"> Contact Us </a> </li>
				<li> <a href="about.html"> About Us </a> </li>
				<li> <a href="learn.php"> Learn about Taking Care of Your Teeth </a> </li>
				<li> <a href="services.html"> Our Services </a> </li>
				<li> <a href="appointment.php"> Book an Appointment </a> </li>
				<li> <a href="login.html"> Login/Register </a> </li>
			</ul>
		</nav>
	</head>
	
	<body>
		<!-- Insert map here, I think, basing it off of http://www.blodgettdentalcare.com/contact-portland-dentist.html 
		Use this if you need to https://www.google.com/maps/place/Hong+T+Mai+Md+Inc/
		@33.7824162,-118.1686261,17z/data=!3m1!4b1!4m5!3m4!1s0x80dd3173bd4fcf09:0x39c5b7b5e08c14bd!8m2!3d33.7824162!4d-118.1664374?hl=en&authuser=0-->
		
		<h2> Address </h2>
		<p>
			2146 East Anaheim Street
			<br/>
			Long Beach, CA, 90804
		</p>
		
		<h2> Office Hours </h2>
		<p>
			Monday - Friday: 9am - 5pm <br/>
			Saturday: 9am - 12pm <br/>
			Sunday: Closed
		</p>
		
		<h2> Dr. John's Cell Phone Number </h2>
		<p> (562) 487 - 3359 </p>
		
		<h2> Email Dr. John </h2>
		<p> jnguyen@drjohn.html </p>
		
		<footer>
			<p>
				<?php include 'dentist-footer.php';?>
				Call us: (866) 247 - 4999
				<br/>
				Email the dentist: jnguyen@drjohn.html
				<br/>
				Office Address: 1250 Bellflower Blvd, Long Beach, CA 90840
				<br/>
				<a href="privacy.php"> Our Privacy Policy </a>
			</p>
		</footer>
	</body>
	<!--#echo var="LAST_MODIFIED"-->
	
	
</html>