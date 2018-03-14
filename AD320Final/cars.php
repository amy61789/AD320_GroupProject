<?php  
    include "information.php";
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Car rental home page</title>
<link href="css/reset.css" type="text/css" rel="stylesheet">
<link href="css/product.css" type="text/css" rel="stylesheet">
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
<th><p>AD300 Car Rental</p></th>
<td><img src="images/rental2.png" alt="logo2"></td>
</tr>
</table>
</header>

<nav>
<ul>
<li><a href="index.html">Rental Car</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="policy.html">Rental Policy </a></li>
</ul>
</nav>

<main>

<table class="main">
    <tr>
        <td>Pick up</td>
        <td>month</td>
        <td>data</td>
        <td>year</td>
    </tr>
    
    <tr>
        <td><?php echo $pickup_month; ?></td>
        <td><?php echo $pickup_date; ?></td>
        <td><?php echo $pickup_year; ?></td>
    
    </tr>
    
    
    <tr>
        <td>Drop off</td>
        <td>month</td>
        <td>data</td>
        <td>year</td>
    </tr>
    
    <tr>
        <td><?php echo $dropoff_month; ?></td>
        <td><?php echo $dropoff_date; ?></td>
        <td><?php echo $dropoff_year; ?></td>
    
    </tr>
    
    
<tr>
<th><img src="images/compact1.1.jpg" alt="compact car1"></th>
<th><img src="images/compact2.1.jpg" alt="compact car2"></th>
<th><img src="images/mid1.1.jpg" alt="mid car1"></th>
<th><img src="images/mid2.1.jpg" alt="mid car2"></th>
</tr>
<tr>

<th><input type="radio" name="Prius" value="Prius">Compact</th>
<th><input type="radio" name="Civic" value="Civic">Standard</th>
<th><input type="radio" name="Camry" value="Camry">Full Size</th>
<th><input type="radio" name="Accord" value="Accord">SUV</th>

</tr>
 
<tr><td><input type="submit" value="Go to your cart"></td></tr>
</table>

</main>

<footer>
<ul>
<li>Copyright 2017, &copy;</li>
<li>All Rights Reserved</li>
<li><a href="../index.html">Web Designed by Yitong</a></li>
 
</ul>
</footer>
</div> <!--end wrapper-->
</body>
</html>