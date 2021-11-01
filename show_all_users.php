<head>
	<title>Conact Management - Show All Users</title>
</head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	th {
  text-align: center;
  padding: 14px 16px;
  color: #2c2c2c;
	}

	td {
  text-align: center;
  padding: 14px 16px;
  color: #2c2c2c;
	}


</style>

<script>
	function editThisUser(userName){

		window.location.href = '/edit_contact_details.php?name=' + userName;

	}

</script>

<?php 
session_start();
require "include/checkIfLoggedIn.php";
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
<body onload="getScreenDetails();" class="content">
<div class="header" id="myHeader">
  <a href="dashboard.php" style="text-align: left;"><h2>Dashboard</h2></a>
</div>

      

	<h1 class="elegantshadow">Saltaire Sports </h1>
	
	<table>
  <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Membership Type</th>
  </tr>
  <?php 
 	 	
		$handle = fopen("data.csv", "r");
		if ($handle) {
		    while (($line = fgets($handle)) !== false) {
		        $lineArray = explode(",", $line);
		        echo("<tr>");
		        echo("<td>".$lineArray[0]."</td>");
		        echo("<td>".$lineArray[2]."</td>");
		        echo("<td>".$lineArray[3]."</td>");
		        if($_SESSION['userType'] == "admin"){
							echo('<td><button onclick="editThisUser(\''.$lineArray[0].'\');">Edit</button></td>');
		        }
		        echo("</tr>");
		      
		        
		    }
		    fclose($handle);
		} else {
		    echo("Error opening data file.");
		} 
  ?>
	</table>
	</form>
	
</body>
<br>
<div class="header" id="myHeader">
  <a href="https://github.com/umarhaider/ContactManagementSystem" style="text-align: left; font-size: 5px;"><h2>&copy; Copyright Umar Haider</h2></a>
</div>
</html>