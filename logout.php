<?php
include('logininfo.php');

echo "<h1>You have logged out.</h1><br><h2>You will be redirected back to the login page.</h2>";
logout();


header('Refresh: 5; URL=/ad320/final/login.php');

?>