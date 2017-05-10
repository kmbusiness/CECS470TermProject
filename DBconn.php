<?php
class DBConn
{
	public function connect()
	{
		$mysqli = mysqli_connect("cecs-db01.coe.csulb.edu","YOUR_USERNAME_GOES_HERE","YOUR_PASSWORD_GOES_HERE","cecs470og4");
		$error = mysqli_connect_error();
		//if there is a connection error...
		if ($error != null) {
		  $output = "<p>Unable to connect to database<p>" . $error;
		  exit($output);
		  }
		
		return $mysqli;
	}
}
?>