<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

@$name = $_POST['name'];
@$email = $_POST['email'];
@$mobile = $_POST['mobile'];
@$message = $_POST['message'];


// SQL query to insert user data into the database
$sql = "INSERT INTO user (name, email,mobile,message) VALUES ('$name', '$email', '$mobile','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

