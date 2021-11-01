<?php
session_start();


//edit user details
$content = file_get_contents('../data.csv');
$content = str_replace($_POST["old1"].",". $_POST["old2"].",". $_POST["old3"].",". $_POST["old4"].",". $_POST["old5"], $_POST["fullname"].",". $_POST["emailaddress"].",". $_POST["phonenumber"].",". $_POST["memtype"].",". $_POST["photo"]."\r\n", $content);
file_put_contents('../data.csv', $content);
header('Location: /show_all_users.php');

 ?>