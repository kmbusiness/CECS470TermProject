#!/usr/local/php5/bin/php-cgi
<?php
// require_once("DBConn.php");
function connect()
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
session_start();
$prev_page = $_SESSION['prev_page'];
// $db    = new DBConn();
$conn  = connect();

//declare and initialize variables
$email = '';
$pw = '';

//assign form values to variables if they were submitted
if (isset($_POST['email']) )
{
	$email =$_POST['email'];
}
if (isset($_POST['pw']) )
{
	$pw =$_POST['pw'];
}

//escape user inputs
$email = mysqli_real_escape_string($conn, $email);
$pw = mysqli_real_escape_string($conn, $pw);


$email_empty = '0';
$pw_empty = '0';
$login_error = '0';

$input_error_flag = false;
if($email == '') {
	$email_empty = '1';
	$input_error_flag = true;
}
if($pw == '') {
	$pw_empty = '1';
	$input_error_flag = true;
}
//if there is any input error
if($input_error_flag === true) {
	$_SESSION['login_status'] = "login_error";
	$login_error = '1';
	$error_string = "Location: " . $prev_page . "?errors=" . $email_empty . $pw_empty . $login_error;
	header($error_string);
	exit();
}


$statement = "
	SELECT pw
	FROM cecs470og4.users
	WHERE email = '$email'
";
$result = mysqli_query($conn,$statement);

$ret_pw = mysqli_fetch_row($result);
// print_r($ret_pw);

if (password_verify($pw, $ret_pw[0])) {
    mysqli_free_result($result);
	mysqli_close($conn);
	$_SESSION['login_status'] = "login_successfull";
	//update login_email sessions
	$_SESSION['login_email'] = $email;
	$prev_location = "Location: " . $prev_page;
	header($prev_location);
	exit();


} else {
    mysqli_free_result($result);
	mysqli_close($conn);
	$_SESSION['login_status'] = "login_error";
	$login_error = '1';
	// $error_string = "Location: " . $prev_page . "?errors=" . $email_empty . $pw_empty . $login_error . "email=" . $email . $ret_pw[0];
	$error_string = "Location: " . $prev_page . "?errors=" . $email_empty . $pw_empty . $login_error;
	header($error_string);
	exit();
}







?>
