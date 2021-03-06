<?php
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
	
	$pickup = filter_input(INPUT_POST,"start");
    $dropoff = filter_input(INPUT_POST, "end");
    $pickup_date = filter_input(INPUT_POST, "day_start");
    $pickup_month = filter_input(INPUT_POST, "month_start");
    $pickup_year = filter_input(INPUT_POST, "year_start");
    $dropoff_month= filter_input(INPUT_POST, "day_end");
    $dropoff_date =filter_input(INPUT_POST, "month_end");
    $dropoff_year = filter_input(INPUT_POST, "year_end"); 
	$car_id = filter_input(INPUT_POST, "car");

	$pick_up = $pickup_year . '-' . $pickup_month . '-' . $pick_up_date;
	$drop_off = $dropoff_year . '-' . $dropoff_month . '-' . $dropoff_date;
	
	$sql = "INSERT INTO order (customer_id, pick_up_date, drop_off_date, car_id) VALUES ('$customer_id', '$pick_up', '$drop_off', '$car_id');
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Car rental home page</title>
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
<li><a href="policy.html">My Account </a></li>
</ul>
</nav>

<main>
<h1 style="font-weight: bold">Make a Reservation:</h1>
<table class="main">
    <form action="cars.php" method="POST"> 
        <tr>
        <div class="dates">
        <fieldset class="date"> 
        <legend>Start Date </legend> 
        <label for="month_start">Month</label> 
        <select id="month_start" name="month_start" > 
            <option value="January">January</option>       
            <option value="February">February</option>       
            <option value="March">March</option>       
            <option value="April">April</option>       
            <option value="May">May</option>       
            <option value="June">June</option>       
            <option value="July">July</option>       
            <option value="August">August</option>       
            <option value="September">September</option>       
            <option value="October">October</option>       
            <option value="November">November</option>       
            <option value="December">December</option>
          </select> - 
          <label for="day_end">Day</label> 
          <select id="day_end" name="day_start" > 
            <option value="1">1</option>       
            <option value="2">2</option>       
            <option value="3">3</option>       
            <option value="4">4</option>       
            <option value="5">5</option>       
            <option value="6">6</option>       
            <option value="7">7</option>       
            <option value="8">8</option>       
            <option value="9">9</option>       
            <option value="10">10</option>       
            <option value="11">11</option>       
            <option value="12">12</option>       
            <option value="13">13</option>       
            <option value="14">14</option>       
            <option value="15">15</option>       
            <option value="16">16</option>       
            <option value="17">17</option>       
            <option value="18">18</option>       
            <option value="19">19</option>       
            <option value="20">20</option>       
            <option value="21">21</option>       
            <option value="22">22</option>       
            <option value="23">23</option>       
            <option value="24">24</option>       
            <option value="25">25</option>       
            <option value="26">26</option>       
            <option value="27">27</option>       
            <option value="28">28</option>       
            <option value="29">29</option>       
            <option value="30">30</option>       
            <option value="31">31</option>        
          </select> - 
          <label for="year_end">Year</label> 
          <select id="year_end" name="year_start" > 
            <option value="2018">2018</option>
            <option value="2019">2019</option>
          </select> 

        </fieldset> 
     
        <fieldset class="date"> 
          <legend>End Date </legend> 
          <label for="month_end">Month</label> 
          <select id="month_end"name="month_end" > 
            <option value="January">January</option>       
            <option value="February">February</option>       
            <option value="March">March</option>       
            <option value="April">April</option>       
            <option value="May">May</option>       
            <option value="June">June</option>       
            <option value="July">July</option>       
            <option value="August">August</option>       
            <option value="September">September</option>       
            <option value="October">October</option>       
            <option value="November">November</option>       
            <option value="December">December</option>  
          </select> -
          <label for="day_end">Day</label> 
          <select id="day_end" name="day_end" > 
            <option value="1">1</option>       
            <option value="2">2</option>       
            <option value="3">3</option>       
            <option value="4">4</option>       
            <option value="5">5</option>       
            <option value="6">6</option>       
            <option value="7">7</option>       
            <option value="8">8</option>       
            <option value="9">9</option>       
            <option value="10">10</option>       
            <option value="11">11</option>       
            <option value="12">12</option>       
            <option value="13">13</option>       
            <option value="14">14</option>       
            <option value="15">15</option>       
            <option value="16">16</option>       
            <option value="17">17</option>       
            <option value="18">18</option>       
            <option value="19">19</option>       
            <option value="20">20</option>       
            <option value="21">21</option>       
            <option value="22">22</option>       
            <option value="23">23</option>       
            <option value="24">24</option>       
            <option value="25">25</option>       
            <option value="26">26</option>       
            <option value="27">27</option>       
            <option value="28">28</option>       
            <option value="29">29</option>       
            <option value="30">30</option>       
            <option value="31">31</option>       
          </select> - 
          <label for="year_end">Year</label> 
          <select id="year_end" name="year_end" > 
            <option value="2018">2018</option>
            <option value="2019">2019</option>
          </select> 

        </fieldset> 
           
    </form>
</table>
        <input type="submit" value="submit" name="Pick Your Car">
    <h2 style='font-weight:bold; padding:20px; '>Pick your car size</h2>

    <div class="row">
        <div class="column1"><img src="images/compact1.1.jpg" alt="compact car1"></div>
        <div class="column1"><img src="images/compact2.1.jpg" alt="compact car2"></div>
        <div class="column1"><img src="images/mid1.1.jpg" alt="mid car1"></div>
        <div class="column1"><img src="images/mid2.1.jpg" alt="mid car2"></div>
    </div>
    <div class="row">
        <div class="column"><input type="radio" name="car" value="3">Porsche 911 GT3 / GT3 RS</div>
        <div class="column col2"><input type="radio" name="car" value="4">Mercedes-AMG E63 S 4MATIC</div>
        <div class="column col3"><input type="radio" name="car" value="5">Full Size</div>
    </div>
 
    <div><input type="submit" value="Go to your cart"></div>
     
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
