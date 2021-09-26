<?php
require 'customer.php';
$match = mysqli_query($conn,"SELECT * FROM cart, seeorders WHERE cart.id = seeorders.cartid ");
if (mysqli_num_rows($match)>0) {
  while ($r = mysqli_fetch_assoc($match)) {
    $cid=$r['cartid'];
    $cart_by=$_SESSION['vemail'];
    $del = mysqli_query($conn,"DELETE FROM cart WHERE id ='$cid' AND cart_by='$cart_by'");
  }
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="success.css">
     <title></title>
   </head>
   <body >
     <div class="mid" style="height:40vh;width:50vh; box-shadow: 1px -13px 338px 15px rgba(136,106,123,0.65); ">
       <br>
       <div class="thanks">


    <center>  Hi ! <?php echo $_SESSION["vemail"]; ?></center>
<h2>Thank you for Ordering from us.</h2
         Food ID    : <?php echo $_SESSION["id1"]; ?> <br>
         Food       : <?php echo $_SESSION["food1"]; ?><br>

         Quantity   :<?php echo $_SESSION["count1"]; ?><br>
         Total price:<?php echo $_SESSION["total1"]; ?><br>
   </div>
   </div>

        <div class="porder" >
         <table border="1">
           <h2>Previous Order History</h2>
           <tr>
             <th>id</th>
             <th>Food</th>
             <th>Quantity</th>
              <th>Transaction</th>

           </tr>
           <?php
            $user = $_SESSION['vemail'];
            $sql = mysqli_query($conn,"SELECT * FROM seeorders WHERE order_by='$user'");
            if (mysqli_num_rows($sql)>0) {
              while ($row=mysqli_fetch_assoc($sql)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row["food"]."</td>";
                echo "<td>".$row["quantity"]."</td>";
                echo "<td>".$row["totalprice"]."</td>";

                echo "</tr>";
              }
            }
            ?>
         </table>
       </div>


   </body>
 </html>
