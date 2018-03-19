<?php
session_start();

$message ="Log in";

// check if already logged in
if (is_logged_in()) {
	header("Location: /ad320/final/index.php"); // Redirect if already logged in
    $message= "Hello " . $_SESSION['email']. " ! ";
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
		$message="Hello $email";
        $_SESSION["email"] = $email;
                $_SESSION["pass"] =$pass;
		if (isset($_POST["remember"])) {
			setcookie("email", $email, time() + 60*60*24, "/");
		}
		header("Location: /ad320/final/index.php");
	} else {
		echo "Invalid email or password <br />";
	}
}


function is_logged_in() {
	if (!isset($_SESSION["email"]) && isset($_COOKIE["email"])) {
		$_SESSION["email"] = $_COOKIE["email"];
	}
	return isset($_SESSION["email"]);
}
function logout() {
	unset($_SESSION["email"]);
	setcookie("email", "", 0, "/");
}
?>
