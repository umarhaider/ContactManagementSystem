<?php 
session_start();
require "include/checkIfLoggedIn.php";
if($_SESSION['userType'] == "user"){
		echo '<script language="javascript">';
		echo 'alert("You cannot access this page!")';
		echo '</script>';
		header('Location: dashboard.php?code=12');
}
//Check if user exists
$handle = fopen('data.csv', 'r');
$valid = false; // init as false
while (($buffer = fgets($handle)) !== false) {
    if (strpos($buffer, $_POST["fullname"]) !== false) {
        $valid = TRUE;
        //header('Location: /dashboard.php');
        break;
    }      
}
fclose($handle);
?>

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
<head>
	<title>Contact Management - Save Details</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="content">
	<div class="header" id="myHeader">
  <a href="dashboard.php" style="text-align: left;"><h2>Dashboard</h2></a>
</div>
	<h1 class="elegantshadow">Contact Details</h1>
	<p>The contact details you submitted are shown below:</p>
	<table>
		<tr>
			<td align="right">Last Name: </td>
			<td><?php echo $_POST["fullname"]; ?></td>
		</tr>
		<tr>
			<td align="right">Email Address: </td>
			<td><?php echo $_POST["emailaddress"]; ?></td>
		</tr>
		<tr>
			<td align="right">Phone Number: </td>
			<td><?php echo $_POST["phonenumber"]; ?></td>
		</tr>
		<tr>
			<td align="right">Membership Type: </td>
			<td><?php echo $_POST["memtype"]; ?></td>
		</tr>
		<tr>
			<td align="right">Photo Link: </td>
			<td><?php echo $_POST["photo"]; ?></td>
		</tr>
	</table>

<?php

if ($valid == true){
	echo('<br>The user '.$_POST["fullname"].' already exists, this data will not be saved.');
}
else if ($valid == false){
	//Open data file
	$myFile=fopen("data.csv","a") or exit("Can’t open file!");


	//Write data to file
	fwrite($myFile, $_POST["fullname"].",". $_POST["emailaddress"].",". $_POST["phonenumber"].",". $_POST["memtype"].",". $_POST["photo"]."\r\n");
	fclose($myFile);

	echo '<br>Data Saved on Server';
}



?>
<br>

	<form action="dashboard.php" method="post">
		<input class="w3-button w3-block w3-gray" type="submit" value="Back to user input">
	</form>

</body>	
<br>
<div class="header" id="myHeader">
  <a href="https://github.com/umarhaider/ContactManagementSystem" style="text-align: left; font-size: 5px;"><h2>&copy; Copyright Umar Haider</h2></a>
</div>
</html>