<?php
    include "login.php";
    $pickup_date = filter_input(INPUT_POST, "day_start");
    $pickup_month = filter_input(INPUT_POST, "month_start");
    $pickup_year = filter_input(INPUT_POST, "year_start");
    $days = filter_input(INPUT_POST, "days");
    $car = filter_input(INPUT_POST, "car");
    
    
    
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Car rental home page</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<!--Remy Sharp Shim --> 
<!--[if lte IE 9]>
<![endif]-->
</head>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<body>
<div id="wrapper">
<div class="top">
    <div class="logo"><a href="index.php" >Car Rental.com</a>
        </div>
    <?php if(is_logged_in()) { ?>
        <button id="singup" href="logout.php" style="width:auto;">Log out</button>
    <?php ;} ?>
    <?php if(!is_logged_in()) {?>
    <button id="singup" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><?php echo $message;?></button>
    <?php ;}?>
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="POST" method="login.php">
        <div class="content">
            <h1>Log In</h1>            
            <p>Please fill in this form to create an account.</p><a href="signup.php"> New User?</a>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
         
            <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Log In</button>
          </div>
        </div>
      </form>
    </div>
    
    
    
    
    </div>
<div class="container">
    <p>Experience<br> 
        Best Luxury<br> 
         Car Rental<br> 
           </p>
    <img src="images/img1.jpg">
</div>
<nav>
    
<ul>
    
    <li><a href="car_rental.php">Rental Car</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="policy.html">Rental Policy </a></li>
<li><a href="myaccount.php">My Account </a></li>
</ul>
</nav>

<div class="main">
 <div class="select">
     <br><br>
     <h1 style="font-weight: bold; float:left; margin-top:20px;">Make a Reservation:</h1>
    <br>
    <form action="order.php" method="POST">
        <div class="reservationDate">
            <p style="font-weight:bold; font-size:20px;float:left;">1. Pick date/time</p>
            <br><br>
            <div class="date">
                <label for="date">Choose pick up date: </label>
                <input id="pick-up" type="date" name="date"
                min="2018-03" max="2018-12" required>
            </div>
            <br><br>
            <div class="date">
                <label for="date">Choose drop-off date: </label>
                <input id="drop-off" type="date" name="date"
                    min="2018-03" max="2018-12" required>
            </div>
            <br><br>
            <div class="date">
                <label for="time">Time</label> 
                <select id="time" name="time"> 
                    <option value="8">8:00</option>       
                    <option value="9">9:00</option>       
                    <option value="10">10:00</option>       
                    <option value="11">11:00</option>       
                    <option value="12">12:00</option>       
                    <option value="13">13:00</option>       
                    <option value="14">14:00</option>       
                    <option value="15">15:00</option>       
                    <option value="16">16:00</option>       
                    <option value="17">17:00</option>        
                </select>   
            </div>
        </div>   
        <br>   
        <p style="font-size:20px;font-weight: bold; float:left;"> 2.Choose your car</p>
        <br><br>
        <div class="row">
            <div class="column">
                <div class="name">Mercedes AMG</div>
                <img src="images/car1.jpg" alt="compact car1">
                <input type="radio" name="car" value="1">
                <hr>
            </div>
            <div class="column">
                <div class="name">Mercedes AMG</div>
                <img src="images/car1.jpg" alt="compact car1">
                <input type="radio" name="car" value="">
                <hr>
            </div>
            <div class="column">
                <div class="name">Mercedes AMG</div>
                <img src="images/car1.jpg" alt="compact car1">
                <input type="radio" name="car" value="">
                <hr>
            </div>
            <div class="column">
                <div class="name">Mercedes AMG</div>
                <img src="images/car1.jpg" alt="compact car1">
                <input type="radio" name="car" value="">
                <hr>
            </div>
        </div>
           
        
        
        
        
        
        
        
        
        <input type="submit" value="Go to your cart">
        </form>
          
        
   <!-- <h2>Pick your car</h2> 
    <P style="margin-left: 10px">*the price is how much cost daily.</p>

    <div class="row">
        <div class="column1"><img src="images/gt3.jpg" alt="porshe"> 
            <input type="radio" name="car" value="Porsche 911">Porsche 911 / 300$ 
        </div>
        
        <div class="column1"><img src="images/amg.jpg" alt="AMG">
            <input type="radio" name="car" value="Mercedes-AMG">Mercedes-AMG / 350$
        </div>
        
        
        <div class="column1"><img src="images/m2.jpg" alt="M2">
            <input type="radio" name="car" value="BMW M2">BMW M2 / 350$
        </div>
    </div>
     
    <input class="toOrder" type="submit" value="submit" name="Pick Your Car">   
!-->


</div>
</div>
    
<footer>
<ul>
<li>Copyright 2017, &copy;</li>
<li>All Rights Reserved</li>
<li>Web Designed by ShotaTakada</li>
</ul>
</footer>
    
</div> <!--end wrapper-->
    

</body>
</html>

