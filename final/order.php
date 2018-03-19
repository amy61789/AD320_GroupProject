<?php SESSION_START();
    $email = $_SESSION["email"];
    $_POST["car"];
    echo $_POST["dailyPrice"] ;
    echo $_POST["start"];
    echo $_POST["total"];
    echo $_POST["days"];
    



?><!doctype html>
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
<div id="wrapper" >
<main>
    <h1>Thank you for your order. </h1>
    <p>Your order is processing.</p>
    
    
</main>
</div> 
    
<footer>
<ul>
<li>Copyright 2017, &copy;</li>
<li>All Rights Reserved</li>
<li>Web Designed by Yitong</li>
</ul>
</footer>
 <!--end wrapper-->
</body>
</html>