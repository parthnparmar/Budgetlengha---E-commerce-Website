<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
       if( mysqli_query($con,$query1))
       {
        $Order_Id=mysqli_insert_id($con);
        $query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
        $stmt=mysqli_prepare($con,$query2);
        if($stmt)
        {
         mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
         foreach($_SESSION['cart'] as $key => $values)
         {
             $Item_Name=$values['Item_Name'];
             $Price=$values['Price'];
             $Quantity=$values['Quantity'];
             mysqli_stmt_execute($stmt);
         }
         unset($_SESSION['cart']);
         echo "<script> 
         alert('SQL query prepare error');
         window.location.href='http://localhost:3000/mycart.php';
         </script>";
 
 
        }
        else
        {
         echo "<script> 
         alert('Order Placed');
         window.location.href='http://localhost:3000/index2.php';
         </script>";
        }
 
        }
        else
        {
         echo "<script> 
         alert('SQL error');
         window.location.href='http://localhost:3000/mycart.php';
         </script>";
        
        }
     }
 
 }
 ?>
    