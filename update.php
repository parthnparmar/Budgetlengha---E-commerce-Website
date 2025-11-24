<style>
input{
 height: 40px;
 width: 200px; }
.div
-input{
 height: 40px;
 width: 200px;
 border: 2px solid brown; }
.div
-main{
 height: fit
-content;
 width: fit
-content;
 padding: 30px;
 background: linear
-gradient();
 border: 2px solid black;
 margin: auto; }
.title{
 text-align: center;
 font-size: 25px;
 font-weight: 550;

 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style>
<?php
 $id= $_GET['id'];
 $conn = mysqli_connect('localhost', 'root', '', 'practical') or die(mysqli_connect_error());
 $sql = "SELECT * FROM `tbl1` WHERE `id`='$id'";
 $res = mysqli_query($conn, $sql);
 if($res == TRUE){
 $count = mysqli_num_rows($res);
 if( $count == 1){
 $row = mysqli_fetch_assoc($res);
 $name = $row['name'];
 $password = $row['password'];
 $email = $row['email'];
 $phno = $row['phone_no'];
 } else{
 header('location:http://localhost/wdproject/admin/manage-admin.php');
 }
 }
 ?>
<form action="" method="post">
 <div class="div-main">
 <div class="title">Update User</div><br>
 <div class="div-input"><input type="text" name="name" value="<?php echo $name; ?>" 
required></div><br>
 <div class="div-input"><input type="password" name="password" value="<?php echo 
$password; ?>" required></div><br>

 <div class="div-input"><input type="email" name="email" value="<?php echo $email; 
?>" required></div><br>
 <div class="div-input"><input type="number" name="phno" value="<?php echo $phno; 
?>" required></div><br>
 <input style="border-radius: 5px;" name="submit" type="submit" value="Submit">
 </div>
</form>
<?php
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $phno = $_POST['phno'];
 $sql1 = "UPDATE `tbl1` SET `name`='$name', `password`='$password', `email`='$email', 
`phone_no`='$phno' WHERE `id`='$id'";
 $res1 = mysqli_query($conn, $sql1);
 if($res1 == true){
 echo("<script>alert('Updated Successfully');</script>");
 echo("<script>window.location.href = 
'http://localhost/wdproject/practicals/practical6c.php';</script>");
 } else {
 echo "Error: " . mysqli_error($conn);
 }
}
?>

