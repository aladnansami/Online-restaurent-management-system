<?php
require 'customer.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="checkout.css">
    <title></title>
  </head>
  <body>
    <div class="checkout1">


    <div class="cashon" >
      <center><h2>CASH ON DELIVERY</h2></center>
      <form  method="post">
        <input type="text" name="address" placeholder="Type Your Address here" required>
        <br><br>
        <strong>Pay:</strong><?php echo $_SESSION['total1']; ?>
          <br><br>
        <input type="submit" name="pay" value="Confirm Order" >
      </form>
      <?php
        if (isset($_POST["pay"])) {
          $cartid = $_SESSION["id1"];
          $user = $_SESSION["vemail"];
          $cat =$_SESSION["category1"];
          $food=$_SESSION["food1"];
          $fid = $_SESSION["fid1"];
          $img = $_SESSION["image1"];
          $quantity=$_SESSION["count1"];
          $address = $_POST["address"];
          $total = $_SESSION["total1"];
        //  echo $total;
        //  echo $quantity;

          //echo $address;

            //$sql = mysqli_query($conn,"INSERT INTO order()");
            $orders =mysqli_query($conn,"INSERT INTO seeorders(fid,cartid,category,food,quantity,totalprice,address,order_by,image) VALUES('$fid','$cartid','$cat','$food','$quantity','$total','$address','$user','$img')");
            header("Location: success.php");


            }


       ?>
    </div>


    <div class="cashout" style="box-shadow: 1px -13px 338px 15px rgba(135,126,123,0.65);">
      <center><h2>CASH OUT DELIVERY</h2></center>
      <form  method="post">
        <input type="textarea" name="address" placeholder="Type Your Address here" required>
        <br><br>
        <strong>Pay:</strong><?php echo $_SESSION['total1']; ?>
          <br><br>
        <input type="submit" name="paywith" value="pay $<?php echo$_SESSION['total1'];?> with">
      </form>
      <?php
        if (isset($_POST['paywith'])) {
          echo "successfully placed order";

        }
       ?>
    </div>
  </div>
  </body>
</html>
