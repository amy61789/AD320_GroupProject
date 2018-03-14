<?php
    
    $pickup = filter_input(INPUT_POST,"pickup");
    $dropoff = filter_input(INPUT_POST, "dropoff");
    $pickup_date = filter_input(INPUT_POST, "pickup_date");
    $pickup_month = filter_input(INPUT_POST, "pickup_month");
    $pickup_year = filter_input(INPUT_POST, "pickup_year");
    $dropoff_month= filter_input(INPUT_POST, "dropoff_month");
    $dropoff_date =filter_input(INPUT_POST, "dropoff_date");
    $dropoff_year = filter_input(INPUT_POST, "dropoff_year");   
    
    setcookie("pickup", $pickup, strtotime('1year'));
    setcookie("dropoff", $dropoff, strtotime('1year'));
    setcookie("pickup_date", $pickup_date, strtotime('1year'));
    setcookie("pickup_month", $pickup_month, strtotime('1year'));
    setcookie("pickup_year", $pickup_year, strtotime('1year'));
    setcookie("dropoff_date", $dropoff_date, strtotime('1year'));
    setcookie("dropoff_month", $dropoff_month, strtotime('1year'));
    setcookie("dropoff_year", $dropoff_year, strtotime('1year'));



?>