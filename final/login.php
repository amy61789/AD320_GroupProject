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
        $query = "SELECT * from customer WHERE email='$email'";
	$result = mysqli_query($conn, $query) or die(mysql_error());
	$row = mysqli_fetch_assoc($result);
        var_dump($row);
	if ($pass == $row["password"]) {
		$_SESSION["email"] = $email;
                $_SESSION["pass"] =$pass;
		if (isset($_POST["remember"])) {
			setcookie("email", $email, time() + 60*60*24, "/");
		}
		header("Location: /ad320/final/car_rental.php");
	} else {
		echo "Invalid email or password <br />";
	}
}
?>

<!-- not logged in -->
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
