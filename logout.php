#!/usr/local/php5/bin/php-cgi
<?php

if (!isset($_SESSION))
{
	session_start();
}
$prev_page = $_SESSION['prev_page'];
session_unset();
setcookie("PHPSESSID", "", time() - 3600);
$_SESSION['login_status'] = "logged_out";
// $prev_location = "Location: /finalproject/";
header("Location: ./");

?>
