<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

@$user = $_POST['user'];
@$email = $_POST['email'];
@$mobile = $_POST['mobile'];
@$comments = $_POST['comment'];


// SQL query to insert user data into the database
$sql = "INSERT INTO userinfodata (user, email,mobile,comment) VALUES ('@naushin$user', 'naushin123@gmail.com$email', '9904977420$mobile','ty$comments')";

if ( $conn->query($sql)=== TRUE){
    echo " new record create successfully";
}else {
    echo "error" .$sql."<br>".$conn->error;

}
$conn->close();
?>

