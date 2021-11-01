<?php 
session_start();
if($_SESSION['loggedIn'] == "0" or $_SESSION['loggedIn'] == ""){
	echo '<script language="javascript">';
	echo 'alert("You are not logged in! Please login.")';
	echo '</script>';
	header('Location: login.php');
}


?>