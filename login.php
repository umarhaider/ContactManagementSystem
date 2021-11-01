<head>
	<title>Contact Managemenmt - Login</title>
</head>

<?php 
session_start();
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

<script type="text/javascript">
function getScreenDetails() {
    document.forms['form1']['resolution'].value = (screen.width + 'px x ' + screen.height + 'px');
}

</script>


<body onload="getScreenDetails();" class="content">

<div class="header" id="myHeader">
  <a href="dashboard.php" style="text-align: left;"><h2>Dashboard</h2></a>
</div>
      

	<h1 class="elegantshadow">Saltaire Sports </h1>
	
	
	<?php 
		if(!isset($_GET['code'])){
			echo('<p>Enter Login Details</p>');
		}
		else if ($_GET['code'] == "11")
		{
			
			echo('<p style="color: red;">Your details are incorrect, please try again.</p>');
		}
	?>
	<form name='form1' id='form1' action="include/loginfunction.php" method="post">
		<input name='resolution' id='resolution' size="20" type="hidden" maxlength="100" name="resolution">
		<table>
			<tr>
				<td align="right">Username: </td>
				<td><input size="20" type="text" maxlength="100" name="user"></td>
			</tr>
			<tr>
				<td align="right">Password: </td>
				<td><input size="20" type="password" maxlength="100" name="pass"></td>
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