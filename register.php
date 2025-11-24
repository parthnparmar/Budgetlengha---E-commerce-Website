<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];

    // TODO: Validate and store the user data in your database (not implemented in this example)
    
    // Redirect to login page after registration
    header("Location: login.html");
    exit();
}
?>
