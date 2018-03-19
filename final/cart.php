<?php 
    
    
    $dayS = $_POST["day_start"];
    $monthS = $_POST["month_start"];
    $yearS= $_POST["year_start"];
    $start = $monthS ."/". $dayS. "/". $yearS; // start date
    $days = $_POST['days'];
    $car = $_POST["car"];
    $dailyPrice;
    if($car == "Porsche 911"){
        $dailyPrice = "300";
    }else{
        $dailyPrice = "350";
    }
    
    
    
    
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Car rental home page</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
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
<th><p style="font-size: 50px; float: left;">AD320 Car Rental</p></th>
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

    <div class="reservation"> 
        <h1>Thank you for your order</h1>
        <h1 style="padding-left: 10px;">Reservation Summary</h1>
        <h2>Start Date</h2>
        <p><?php echo $start; ?></P>
        <p> for <?php echo $days ?>  days</p>
        <h2>Car</h2>
        <p> Brand : <?php echo $car; ?></p>
        <p> Daily price :<?php echo $dailyPrice; ?> </p>
        <h2> Price </h2>
        <?php echo $total = $dailyPrice * $days; ?>
        <p> Total : <?php echo $total; ?></p>
        <p>All fees are included to total</p>
        <a class="toOrder" href="car_rental.php">Go back to home</a>
            
        <!--
        <form action="order.php" method="post">
            <input class="toOrder" type="submit" value="submit" name="Submit Order">
        </form>
        !-->
    </div>
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

<?php SESSION_START();
    $email = $_SSESION["email"];

    $servername = "localhost";
    $username = "icoolsho_afunk";
    $password = "$!991-26-3507";
    $dbname = "icoolsho_afunk";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    }
    $query = "INSERT INTO final_table (email, car, daily_price, start_date, total_price, amount_of_days) "
            . "VALUES ($email,$car, $dailyPrice,$start,$total,$days)";

?>