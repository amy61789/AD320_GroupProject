<?php $size = filter_input(INPUT_POST, "size"); 
    $sql ="";

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Car rental home page</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<!--<link href="css/blueberry.css " type="text/css" rel="stylesheet ">
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
<li><a href="index.php">Rental Car</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="policy.html">Rental Policy </a></li>
<li><a href="policy.html">My Account </a></li>
</ul>
</nav>

<main>
<table class='info'>
    <tr>
        <th><span style="font-weight:bold">Pick up</span></th>
        <th> <span style="font-weight:bold">month </span> </th>
        <th><span style="font-weight:bold">data </span> </th>
        <th><span style="font-weight:bold">year </span>  </th>
    </tr>
    
    <tr >
        <td> <?php echo $_POST["start"]; ?></td>
        <td> <?php echo $_POST["month_start"]; ?></td>
        <td> <?php echo $_POST["day_start"]; ?></td>
        <td> <?php echo $_POST["year_start"]; ?></td>
    
    </tr>
    
    
    <tr>
        <th><span style="font-weight:bold">Drop off</span> </th>
        <th><span style="font-weight:bold">month</span> </th
        <th><span style="font-weight:bold">data</span> </th>
        <th><span style="font-weight:bold">year</span> </th>
    </tr>
    
    <tr>
        <td> <span style='border-bottom: black solid 1px'> <?php echo $_POST["end"]; ?></span></td>
        <td><span style='border-bottom: black solid 1px'></span><?php echo $_POST["month_end"]; ?></td>
        <td><span style='border-bottom: black solid 1px'></span><?php echo $_POST["day_end"]; ?></td>
        <td><span style='border-bottom: black solid 1px'></span><?php echo $_POST["year_end"]; ?></td>
    
    </tr>
    
</table>
    
    <h2 style='font-weight:bold; padding:20px; '>Pick your car size</h2>

    <div class="row">
        <div class="column1"><img src="images/compact1.1.jpg" alt="compact car1"></div>
        <div class="column1"><img src="images/compact2.1.jpg" alt="compact car2"></div>
        <div class="column1"><img src="images/mid1.1.jpg" alt="mid car1"></div>
        <div class="column1"><img src="images/mid2.1.jpg" alt="mid car2"></div>
    </div>
    <div class="row">
        <div class="column"><input type="radio" name="size" value="Prius">Compact</div>
        <div class="column col2"><input type="radio" name="Civic" value="Civic">Standard</div>
        <div class="column col3"><input type="radio" name="Camry" value="Camry">Full Size</div>
        <div class="column col4"><input type="radio" name="Accord" value="Accord">SUV</div>

    </div>
 
    <div><input type="submit" value="Go to your cart"></div>


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