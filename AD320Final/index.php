<?php
  include "information.php";
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
    
<li><a href="index.html">Rental Car</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="policy.html">Rental Policy </a></li>
</ul>
</nav>

<main>
<h1>Make a Reservation:</h1>
<table class="main">
     
        <tr>
            <td>Pic-up Location <input type="text" name="pickup" style="width: 300px; height:25px;"></td></tr>
    
         
        <div class="dates">
        <fieldset class="date"> 
        <legend>Start Date </legend> 
        <label for="month_start">Month</label> 
        <select id="month_start" 
                name="month_start"> 
            <option name="pickup_month" value="January">January</option>       
            <option name="pickup_month" value="February">February</option>       
            <option name="pickup_month" value="March">March</option>       
            <option name="pickup_month" value="April">April</option>       
            <option name="pickup_month" value="May">May</option>       
            <option name="pickup_month" value="June">June</option>       
            <option name="pickup_month" value="July">July</option>       
            <option name="pickup_month" value="August">August</option>       
            <option name="pickup_month" value="September">September</option>       
            <option name="pickup_month" value="October">October</option>       
            <option name="pickup_month" value="November">November</option>       
            <option name="pickup_month" value="December">December</option>  
          </select> - 
          <label for="day_end">Day</label> 
          <select id="day_end" 
                  name="day_end" > 
            <option name="pickup_date" value="1">1</option>       
            <option name="pickup_date" value="2">2</option>       
            <option name="pickup_date" value="3">3</option>       
            <option name="pickup_date" value="4">4</option>       
            <option name="pickup_date" value="5">5</option>       
            <option name="pickup_date" value="6">6</option>       
            <option name="pickup_date" value="7">7</option>       
            <option name="pickup_date" value="8">8</option>       
            <option name="pickup_date" value="9">9</option>       
            <option name="pickup_date" value="10">10</option>       
            <option name="pickup_date" value="11">11</option>       
            <option name="pickup_date" value="12">12</option>       
            <option name="pickup_date" value="13">13</option>       
            <option name="pickup_date" value="14">14</option>       
            <option name="pickup_date" value="15">15</option>       
            <option name="pickup_date" value="16">16</option>       
            <option name="pickup_date" value="17">17</option>       
            <option name="pickup_date" value="18">18</option>       
            <option name="pickup_date" value="19">19</option>       
            <option name="pickup_date" value="20">20</option>       
            <option name="pickup_date" value="21">21</option>       
            <option name="pickup_date" value="22">22</option>       
            <option name="pickup_date" value="23">23</option>       
            <option name="pickup_date" value="24">24</option>       
            <option name="pickup_date" value="25">25</option>       
            <option name="pickup_date" value="26">26</option>       
            <option name="pickup_date" value="27">27</option>       
            <option name="pickup_date" value="28">28</option>       
            <option name="pickup_date" value="29">29</option>       
            <option name="pickup_date" value="30">30</option>       
            <option name="pickup_date" value="31">31</option>       
          </select> - 
          <label for="year_end">Year</label> 
          <select id="year_end" 
                 name="year_end" > 

            <option name="pickup_year" value="2018">2018</option>
            <option name="pickup_year" value="2019">2019</option>
          </select> 

        </fieldset> 
     
        <fieldset class="date"> 
          <legend>End Date </legend> 
          <label for="month_end">Month</label> 
          <select id="month_end" 
                  name="month_end" > 
            <option name="dropoff_month" value="January">January</option>       
            <option name="dropoff_month" value="February">February</option>       
            <option name="dropoff_month" value="March">March</option>       
            <option name="dropoff_month" value="April">April</option>       
            <option name="dropoff_month" value="May">May</option>       
            <option name="dropoff_month" value="June">June</option>       
            <option name="dropoff_month" value="July">July</option>       
            <option name="dropoff_month" value="August">August</option>       
            <option name="dropoff_month" value="September">September</option>       
            <option name="dropoff_month" value="October">October</option>       
            <option name="dropoff_month" value="November">November</option>       
            <option name="dropoff_month" value="December">December</option>  
          </select> - 
          <label for="day_end">Day</label> 
          <select id="day_end" 
                  name="day_end" > 
            <option name="dropoff_date" value="1">1</option>       
            <option name="dropoff_date" value="2">2</option>       
            <option name="dropoff_date" value="3">3</option>       
            <option name="dropoff_date" value="4">4</option>       
            <option name="dropoff_date" value="5">5</option>       
            <option name="dropoff_date" value="6">6</option>       
            <option name="dropoff_date" value="7">7</option>       
            <option name="dropoff_date" value="8">8</option>       
            <option name="dropoff_date" value="9">9</option>       
            <option name="dropoff_date" value="10">10</option>       
            <option name="dropoff_date" value="11">11</option>       
            <option name="dropoff_date" value="12">12</option>       
            <option name="dropoff_date" value="13">13</option>       
            <option name="dropoff_date" value="14">14</option>       
            <option name="dropoff_date" value="15">15</option>       
            <option name="dropoff_date" value="16">16</option>       
            <option name="dropoff_date" value="17">17</option>       
            <option name="dropoff_date" value="18">18</option>       
            <option name="dropoff_date" value="19">19</option>       
            <option name="dropoff_date" value="20">20</option>       
            <option name="dropoff_date" value="21">21</option>       
            <option name="dropoff_date" value="22">22</option>       
            <option name="dropoff_date" value="23">23</option>       
            <option name="dropoff_date" value="24">24</option>       
            <option name="dropoff_date" value="25">25</option>       
            <option name="dropoff_date" value="26">26</option>       
            <option name="dropoff_date" value="27">27</option>       
            <option name="dropoff_date" value="28">28</option>       
            <option name="dropoff_date" value="29">29</option>       
            <option name="dropoff_date" value="30">30</option>       
            <option name="dropoff_date" value="31">31</option>       
          </select> - 
          <label for="year_end">Year</label> 
          <select id="year_end" 
                 name="year_end" > 

            <option name="dropoff_year" value="2018">2018</option>
            <option name="dropoff_year" value="2019">2019</option>
          </select> 

        </fieldset> 
    </div>
    <tr><td>Return Location: <input type="text" name="dropoff" style="width: 300px;  height:25px;"></td><tr>
     
 
 
<form action="cars.php">
<tr><td><input type="submit" value="Pick a car"></td></tr>
</form>

</table>
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