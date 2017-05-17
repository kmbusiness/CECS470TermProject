#!/usr/local/php5/bin/php-cgi
<?php
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
$appointment_user_id = '';
$appointment_hour = '';
$appointment_minute = '';
$appointment_month = '';
$appointment_day = '';
$appointment_year = '';
$appointment_type = '';
$appointment_status = '';
$appointment_type = '';

$email = '';

//assign form values to variables if they were submitted
if (isset($_POST['hour']) )
{
	$appointment_hour =$_POST['hour'];
}
if (isset($_POST['minute']) )
{
	$appointment_minute =$_POST['minute'];
}
if (isset($_POST['month']) )
{
	$appointment_month =$_POST['month'];
}
if (isset($_POST['day']) )
{
	$appointment_day =$_POST['day'];
}
if (isset($_POST['year']) )
{
	$appointment_year =$_POST['year'];
}
if (isset($_POST['type']) )
{
	$appointment_type =$_POST['type'];
}
if (isset($_SESSION['login_email']) )
{
	$email = $_SESSION['login_email'];
}
else {
	mysqli_close($conn);
	$prev_location = "Location: " . $prev_page . "?errors=10";
	header($prev_location);
	exit();
}

//escape user inputs
$appointment_hour = mysqli_real_escape_string($conn, $appointment_hour);
$appointment_minute = mysqli_real_escape_string($conn, $appointment_minute);
$appointment_month = mysqli_real_escape_string($conn, $appointment_month);
$appointment_day = mysqli_real_escape_string($conn, $appointment_day);
$appointment_year = mysqli_real_escape_string($conn, $appointment_year);
$appointment_type = mysqli_real_escape_string($conn, $appointment_type);

//create string representation db date variable
$appointment_date = $appointment_year . '-' . $appointment_month . '-' . $appointment_day;
$appointment_time = $appointment_hour . ':' . $appointment_minute . ':00';


//access db

$statement = "select * from cecs470og4.users where email = '$email';";
$result = mysqli_query($conn, $statement);
//if there is an account in the database with the entered email
if(mysqli_num_rows($result) == 1) {
	// $user_id = $result[0]['userID'];
	// mysqli_free_result($result);
	$user = mysqli_fetch_assoc($result);
	$user_id = $user['userID'];
	mysqli_free_result($result);

	$statement_insert = '
		INSERT INTO cecs470og4.appointment (userID, aTime, aDate, aStatus, aType)
		VALUES
		('.$user_id.',
		"'.$appointment_time.'",
		"'.$appointment_date.'",
		0,
		"'.$appointment_type.'");';
	$result = mysqli_query($conn, $statement_insert);
	if($result) {
		// mysqli_free_result($result);
		mysqli_close($conn);
		$prev_location = "Location: " . $prev_page . "?errors=00";
		header($prev_location);
		exit();

	}
	else {
		mysqli_close($conn);
		$prev_location = "Location: " . $prev_page . "?errors=01";
		header($prev_location);
		exit();
	}
	// echo $result;

	// echo "insert";
	// print_r($user);
	// echo '<br>' .$a['userID'] . ' date: ' . $appointment_date . ' time: ' . $appointment_time;
	// $_SESSION['login_status'] = 'error_account_exists';
	// mysqli_free_result($result);
	// mysqli_close($conn);
	// $prev_location = "Location: " . $prev_page;
	// header($prev_location);
}
//if account doesn't already exist





//echo $first_name . ' ' . $last_name . ' ' . $gender . ' ' . $birthday . ' ' . $email . ' ' . $pw;















?>
