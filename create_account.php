#!/usr/local/php5/bin/php-cgi
<?php
require_once("DBConn.php");
session_start();
$prev_page = $_SESSION['prev_page'];
$db    = new DBConn();
$conn  = $db->connect();

//declare and initialize variables
$first_name = '';
$last_name = '';
$gender = '';
$birthday_month = '';
$birthday_day = '';
$birthday_year = '';
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
if (isset($_POST['first_name']) )
{
	$first_name =$_POST['first_name'];
}
if (isset($_POST['last_name']) )
{
	$last_name =$_POST['last_name'];
}
if (isset($_POST['gender']) )
{
	$gender =$_POST['gender'];
}
if (isset($_POST['month']) )
{
	$birthday_month =$_POST['month'];
}
if (isset($_POST['day']) )
{
	$birthday_day =$_POST['day'];
}
if (isset($_POST['year']) )
{
	$birthday_year =$_POST['year'];
}

//escape user inputs
$first_name = mysqli_real_escape_string($conn, $first_name);
$last_name = mysqli_real_escape_string($conn, $last_name);
$gender = mysqli_real_escape_string($conn, $gender);
$birthday_month = mysqli_real_escape_string($conn, $birthday_month);
$birthday_day = mysqli_real_escape_string($conn, $birthday_day);
$birthday_year = mysqli_real_escape_string($conn, $birthday_year);
$email = mysqli_real_escape_string($conn, $email);
$pw = mysqli_real_escape_string($conn, $pw);

//create string representation db date variable
$birthday = $birthday_year . '-' . $birthday_month . '-' . $birthday_day;

$first_name_empty = '0';
$last_name_empty = '0';
$email_empty = '0';
$pw_empty = '0';
$first_name_too_long = '0';
$last_name_too_long = '0';
$email_too_long = '0';
$pw_too_long = '0';
$email_error = '0';
$pw_error = '0';

$input_error_flag = false;
if($first_name === '') {
	$first_name_empty = '1';
	$input_error_flag = true;
}
if($last_name === '') {
	$last_name_empty = '1';
	$input_error_flag = true;
}
if($email === '') {
	$email_empty = '1';
	$input_error_flag = true;
}
if($pw === '') {
	$pw_empty = '1';
	$input_error_flag = true;
}
if(mb_strlen($first_name) > 30) {
	$first_name_too_long = '1';
	$input_error_flag = true;
}
if(mb_strlen($last_name) > 30) {
	$last_name_too_long = '1';
	$input_error_flag = true;
}
if(mb_strlen($email) > 30) {
	$email_too_long = '1';
	$input_error_flag = true;
}
if(mb_strlen($pw) > 30) {
	$pw_too_long = '1';
	$input_error_flag = true;
}
if(mb_strlen($email) > 30) {
	$email_error = '1';
	$input_error_flag = true;
}
if(mb_strlen($pw) > 30) {
	$pw_error = '1';
	$input_error_flag = true;
}
//if there is any input error
if($input_error_flag) {
	$error_string = "Location: /finalproject/" . $prev_page . "?errors=" . $first_name_empty . $last_name_empty . $email_empty . $pw_empty . $first_name_too_long . $last_name_too_long . $email_too_long . $pw_too_long . $email_error . $pw_error;
	header($error_string);
}

//access db
$statement = "select * from cecs470og4.users where email = '$email';";
$result = mysqli_query($conn, $statement);
//if there is an account in the database with the entered email
if(mysqli_num_rows($result) == 1) {
	mysqli_free_result($result);
	$_SESSION['login_status'] = 'error_account_exists';
	mysqli_close($conn);
	$prev_location = "Location: /finalproject/" . $prev_page;
	header($prev_location);
}
//if account doesn't already exist
else {
	mysqli_free_result($result);
	// date_default_timezone_set('US/Pacific');
	// $current_date_time = date("Y-m-d H:i:s");
	//create secure version of pw to store
	$pw = password_hash($pw, PASSWORD_DEFAULT);
	//use user info to create a new user
	$statement_insert = '
		INSERT INTO cecs470og4.users (firstName, lastName, gender, birthday, pw, admin, email) 
		VALUES 
		("'.$first_name.'", 
		"'.$last_name.'", 
		"'.$gender.'",
		"'.$birthday.'",
		"'.$pw.'",
		0, 
		"'.$email.'");';
	$result = mysqli_query($conn, $statement_insert);
	// print_r($result);
	//update login_status session
	$_SESSION['login_status'] = "account_creation_successfull";
	//update login_email sessions
	$_SESSION['login_email'] = $email;
	// go_to_carpool_page($email);
	// echo $_SESSION['login_status'] . " email: " . $_SESSION['login_email'];
	mysqli_close($conn);
	header("Location: /finalproject/");
}




//echo $first_name . ' ' . $last_name . ' ' . $gender . ' ' . $birthday . ' ' . $email . ' ' . $pw;















?>