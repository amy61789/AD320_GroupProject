<html>
<head><title> Login Page </title> </head>
<body>

<?php
session_start();
require("logininfo.php");

// check if already logged in
if (is_logged_in()) {
	header("Location: index.php"); // Redirect if already logged in
	exit(0);
}

// check if login attempt
if (isset($_POST["username"]) && isset($_POST["password"])) {
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
	$user = $_POST["username"];
	$pass = $_POST["password"];
        $query = "SELECT * from Credentials WHERE Username='test1'";
	//$query = "SELECT Pas from Credentials WHERE Username='" . $user . "'";
	$result = mysqli_query($conn, $query) or die(mysql_error());
	$row = mysqli_fetch_assoc($result);
        var_dump($row);
	if ($pass == $row["Pas"]) {
		$_SESSION["user"] = $user;
		if (isset($_POST["remember"])) {
			setcookie("user", $user, time() + 60*60*24, "/");
		}
		header("Location: /assignment7/index.php");
	} else {
		echo "Invalid username or password <br />";
	}
}
?>

<!-- not logged in -->
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
	Username: <input type="text" name="username" /><br />
	Password: <input type="password" name="password" /><br />
	Remember me <input type="checkbox" name="remember" /><br />
	<input type="submit" />
</form>
<br />
<br />
</body>
</html>