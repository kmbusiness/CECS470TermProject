#!/usr/local/php5/bin/php-cgi
<?php
class DBConn
{
	public function connect()
	{
		$mysqli = mysqli_connect("cecs-db01.coe.csulb.edu","cecs470m22","leze7u","cecs470og4");
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