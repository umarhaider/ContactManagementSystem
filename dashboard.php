<?php
session_start();
require "include/checkIfLoggedIn.php";

		if(!isset($_GET['code'])){
			
		}
		else if ($_GET['code'] == "12")
		{
			
			echo '<script language="javascript">';
	echo 'alert("You cannot access this page!")';
	echo '</script>';
		}
		else if ($_GET['code'] == "13")
		{
			
			echo '<script language="javascript">';
	echo 'alert("You have been logged out!")';
	echo '</script>';
		}
?>
<head>
	<title>Contact Management - Dashboard</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<style>
	

.header {
		font-family: Arial, Helvetica, sans-serif;
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

#inner {
  width: 30%;
  margin: 0 auto;
}
</style>
<html class="content">
<body>

<div class="header" id="myHeader">
  <a href="dashboard.php" style="text-align: left;"><h2>Dashboard</h2></a>
</div>
	<h1 class="elegantshadow">Dashboard</h1>
</body>	

<div>
	<form id="inner" action="add_user.php" method="post">
		<table id="inner">
			<tr>
				<td> </td>
				<td colspan="2" align="center"><input class="w3-button w3-block w3-gray" type="submit" value="Add a user"></td>
			</tr>
		</table>
	</form>
	<form id="inner" action="show_all_users.php" method="post">
		<table id="inner">
			<tr>
				<td> </td>
				<td colspan="2" align="center"><input class="w3-button w3-block w3-gray" type="submit" value="Edit a user"></td>
			</tr>
		</table>
	</form>
	<form id="inner" action="show_all_users.php" method="post">
		<table id="inner">
			<tr>
				<td> </td>
				<td colspan="2" align="center"><input class="w3-button w3-block w3-gray" type="submit" value="See all users"></td>
			</tr>
		</table>
	</form>
	<form id="inner"action="include/logout.php" method="post">
		<table id="inner">
			<tr>
				<td> </td>
				<td colspan="2" align="center"><input class="w3-button w3-block w3-gray" type="submit" value="Logout"></td>
			</tr>
		</table>
	</form>
</div>
<br>
<div class="header" id="myHeader">
  <a href="https://github.com/umarhaider/ContactManagementSystem" style="text-align: left; font-size: 5px;"><h2>&copy; Copyright Umar Haider</h2></a>
</div>
</html>