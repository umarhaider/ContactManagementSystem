<?php
session_start();
session_unset();
header('Location: ../dashboard.php?code=13');

?>