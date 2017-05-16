#!/usr/local/php5/bin/php-cgi

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Info for Dr. John</title>
		<h1>Contact Info</h1>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
			
	</head>
	
	<body>
		<?php include 'dentist-nav.php';?>

		<div class="container">

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
		

		<div class ="ontheright">
			<div id="map" style="width:400px;height:400px;background:yellow"></div>
		</div>
			<script>
			function myMap() {
			var mapOptions = {
			    center: new google.maps.LatLng(51.5, -0.12),
			    zoom: 10,
			    mapTypeId: google.maps.MapTypeId.HYBRID
			}
			var map = new google.maps.Map(document.getElementById("map"), mapOptions);
			}
			</script>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXo6c4tWE4QiEfIlB8uI1ckPmUU33RACk&callback=myMap"></script>
	</div>
	</body>
	<!--#echo var="LAST_MODIFIED"-->
	
	
</html>