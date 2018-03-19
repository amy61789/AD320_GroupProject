<?php session_start();

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
$email;        
if($_SESSION['email']){
    $email = $_SESSION['email'];
    //echo $email;
}else {
    
    //echo "no email found";
}


mysqli_close($conn);
?>

 <!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>myaccount page</title>
<link href="css/reset.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="css/blueberry.css " type="text/css" rel="stylesheet ">
<!--Remy Sharp Shim --> 
<!--[if lte IE 9]> 
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript" >
</script> 
<![endif]-->
</head>

<body>
<div id="wrapper" >

<header>
<table class="header">
<tr>
<td><img src="images/rental1.jpg" alt="logo1"></td>
<th><a href="car_rental.php" style="font-size: 50px; float: left;">AD320 Car Rental</a></th>
<td><img src="images/rental2.png" alt="logo2"></td>
</tr>
</table>

</header>

<nav>
<ul>
    
    <li><a href="car_rental.php">Rental Car</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="policy.html">Rental Policy </a></li>
<li><a href="myaccount.php">My Account </a></li>
</ul>
</nav>

<main>
<form>
        <h1>Account Information:</h1>
        <p id="tab"><?php echo "Username: ".$email."."?></p>
        <h1>Order History:</h1> 
<?php session_start();

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
        
    $email;        
    if($_SESSION['email']){
        $email = $_SESSION['email'];
        //echo $email;
    }else {
    
        //echo "no email found";
    }
    $sql = "SELECT * FROM final_table WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
		
    echo "<table border='1'>
        <tr>
	<th>car</th>
	<th>daily_price</th>
	<th>amount_of_days</th>
	<th>start_date</th>
	<th>total_price</th>
	</tr>";

        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $row['car'] . "</td>";
            echo "<td>" . $row['daily_price'] . "</td>";
            echo "<td>" . $row['amount_of_days'] . "</td>";
            echo "<td>" . $row['start_date'] . "</td>";
            echo "<td>" . $row['total_price'] . "</td>";
            echo "</tr>";
        }
	echo "</table>";
        mysqli_close($conn);
?>
    </form>
</main>
<footer>
<ul>
<li>Copyright 2017, &copy;</li>
<li>All Rights Reserved</li>
<li>Web Designed by Yitong</li>
</ul>
</footer>
</div> <!--end wrapper-->
</body>
</html>