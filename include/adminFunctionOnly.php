<?php

	if($_SESSION['userType'] == "user"){
		echo '<script language="javascript">';
		echo 'alert("You cannot access this page!")';
		echo '</script>';
		header('Location: dashboard.php')
	}
	else{
		continue;
	}


?>