<html>
<head><title> Login Page </title> </head>
<body>

<?php
session_start();
require("logininfo.php");
// check if already logged in
if (is_logged_in()) {
	header("Location: /ad320/final/car_rental.php"); // Redirect if already logged in
	exit(0);
}
// check if login attempt
if (isset($_POST["email"]) && isset($_POST["password"])) {
	$servername = "localhost";
        $username = "icoolsho_afunk";
        $password = "$!991-26-3507";
        $dbname = "icoolsho_afunk";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
	$email = $_POST["email"];
	$pass = $_POST["password"];
        $query = "SELECT * from customer WHERE email=shota@gmail.com";
	//$query = "SELECT Pas from Credentials WHERE Username='" . $user . "'";
	$result = mysqli_query($conn, $query) or die(mysql_error());
	$row = mysqli_fetch_assoc($result);
        var_dump($row);
	if ($pass == $row["password"]) {
		$_SESSION["email"] = $user;
		if (isset($_POST["remember"])) {
			setcookie("email", $email, time() + 60*60*24, "/");
		}
		header("Location: /ad320/final/car_rental.php");
	} else {
		echo "Invalid email or password <br />";
	}
}
?>
    <style>
        form{
            width:500px;
            text-align: center;
            background: rgba(100, 100, 100, 0.5); 
            
        }
        
        
        
    </style>
<!-- not logged in -->
<h2>Log in here</h2>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
	Email: <input type="text" name="email" /><br />
	Password: <input type="password" name="password" /><br />
	Remember me <input type="checkbox" name="remember" /><br />
	<input type="submit" />
</form>
<br />
<br />
</body>
</html>