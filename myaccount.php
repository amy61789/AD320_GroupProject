<?php
include "login.php";

$sql = "SELECT email FROM customer WHERE email = $email ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "username: " . $row["email"].  "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

