<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "user" && $pass == "shipley"){
	$_SESSION['loggedIn'] = "1";
	$_SESSION['userType'] = "user";
	header('Location: ../dashboard.php');
}
else if ($user == "admin" && $pass == "saltaire"){
	$_SESSION['loggedIn'] = "1";
	$_SESSION['userType'] = "admin";
	header('Location: ../dashboard.php');
}
else{
	header('Location: login.php?code=11');
}

?>