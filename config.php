<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "cart_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed!".$conn->connect_error);
}
?>