<head>
	<title>Contact Management - Add User</title>
</head>

<?php 
session_start();
require "include/checkIfLoggedIn.php";
if($_SESSION['userType'] == "user"){
		header('Location: dashboard.php?code=12');
}


?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	

	.header {
		font-family: Arial, Helvetica, sans-serif;
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
<body onload="getScreenDetails();" class="content">
<div class="header" id="myHeader">
  <a href="dashboard.php" style="text-align: left;"><h2>Dashboard</h2></a>
</div>

      

	<h1 class="elegantshadow">Saltaire Sports </h1>
	
	<p>Enter User Details</p>
	<form action="save_contact_details.php" method="post">
		<table>
			<tr>
				<td align="right">Name: </td>
				<td><input size="20" type="text" maxlength="50" name="fullname"></td>
			</tr>
			<tr>
				<td align="right">Email Address: </td>
				<td><input size="20" type="text" maxlength="100" name="emailaddress"></td>
			</tr>
			<tr>
				<td align="right">Phone Number: </td>
				<td><input size="20" type="text" maxlength="11" name="phonenumber"></td>
			</tr>
			<tr>
				<td align="right">Membership Type: </td>
				<td><input size="20" type="text" maxlength="1" name="memtype"></td>

			</tr>
			<tr>
				<td align="right">Photo Link: </td>
				<td><input size="20" type="text" maxlength="5000" name="photo"></td>
			</tr>
			<tr>
				<td> </td>
				<td colspan="2" align="left"><input class="w3-button w3-block w3-gray" type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	
</body>
<br>
<div class="header" id="myHeader">
  <a href="https://github.com/umarhaider/ContactManagementSystem" style="text-align: left; font-size: 5px;"><h2>&copy; Copyright Umar Haider</h2></a>
</div>
</html>