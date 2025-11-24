<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>My Cart</h1>
        </div>
        <div class="col-lg-9">
        <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody class="text-center">

    <?php
    
    if(isset($_SESSION['cart']))
    {
    
    foreach($_SESSION['cart'] as $key => $value)
    {
      $total=$$total+$value['PRICE'];
        
       
        echo"
        <tr>
        <td>$sr</td>
        <td>$value[Item_Name]</td>
        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
        <td>
        <form action='http://localhost:3000/manage_cart.php' method='POST'>
        <input class='text-center iquantity' name='Mod_Quantity'onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'> 
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
        <td class='itotal'></td>
        <td>
        <form action='http://localhost:3000/manage_cart.php' method='POST'>
            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
        </tr>

        ";
    }
}
    ?>
    
    
   
  </tbody>
</table>
        </div>
        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
            <h4> Grand Total:</h4>
            <h5 class="text-right" ><?php echo $total?></h5>
            <br>
            <?php
            if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
            {
            ?>
            <form action="purchase.php" method="POST">
            <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="full_name" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="number" name="phone_no" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" required >
  </div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
   Cash on Delivery
  </label>
  
</div>
<br>
                <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
            </form>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
   </div>
   <script>
    var gt=0;
    var iprice=document.getElementByClassName('iprice');
    var iquantity=document.getElementByClassName('iquantity');
    var itotal=document.getElementByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
      {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt=gt+(iprice[i].value)*(iquantity[i].value);

        }
        gtotal.innerText=gt;

      }

      subTotal();
    
    </script>
</body>
</html>
///

if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
           unset($_SESSION['cart'][$key]);
           $_SESSION['cart']=array_values($_SESSION['cart']);
           echo "<script> alert('Item Removed');
           window.location.href='http://localhost:3000/mycart.php';
           </script>";
            }
        }
    }
    if(isset($_POST['Mod_Quantity']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
          
           echo "<script> 
           window.location.href='http://localhost:3000/mycart.php';
           </script>";
            }
        }  
    }
}
?>


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


<?php
session_start();
$con=mysqli_connect("localhost","root","","testing");
if(mysqli_connect_error()){
    echo "<script> 
    alert('cannot connect');
    window.location.href='http://localhost:3000/mycart.php';
    </script>";
    exit();
}