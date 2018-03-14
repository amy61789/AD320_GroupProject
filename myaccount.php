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

