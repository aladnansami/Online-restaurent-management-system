<?php
require 'admin.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="AssignDelivery.css">
     <title>Assign Delivery</title>
   </head>
   <body>
       <center><h1>Assign Hero Delivery</h1></center>
       <div class="assignfom">


       <form  method="post">
         <div class="section">



          <select  name="dboy">
            <?php
            $dboy = mysqli_query($conn,"SELECT * FROM deleveryman");
            if (mysqli_num_rows($dboy)>0) {
              while ($row=mysqli_fetch_assoc($dboy)) {
                $em=$row['email'];
              echo "<option >".$em."</option>";

              }
            }
             ?>
          </select>



          <select  name="order">
            <?php
            $order = mysqli_query($conn,"SELECT * FROM seeorders");
            if (mysqli_num_rows($order)>0) {
              while ($row1=mysqli_fetch_assoc($order)) {
                  $oid=$row1['id'];
                echo "<option >".$oid."</option>";

              }
            }
             ?>
          </select>

          <div class="asnbt">


          <input  type="submit" name="assign" value="ASSIGN">
          </div>
          <?php
             if (isset($_POST["assign"])) {
               $deliEmail = $_POST['dboy'];
               $oid = $_POST['order'];


               $check=mysqli_query($conn,"SELECT orderid FROM assign WHERE orderid='$oid'");

                if(mysqli_num_rows($check)==0) {
                   $assign = mysqli_query($conn,"INSERT INTO assign(orderid,deliEmail) VALUES('$oid','$deliEmail')");
                }
                else{
                  echo "Assigned once!";
                }


             }
           ?>
       </form>
       </div>

   </body>
 </html>
