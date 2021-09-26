<?php
require 'deliveryMan.php';

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="toDeliver.css">
     <title>Delivery Address</title>
   </head>
   <body>
     <div class="">
     <table border="1">
       <h1>My Delivery List</h1>
     	<tr>
     		<th>SL</th>
   			<th>Order ID</th>
   			<th>Delivery Email</th>
   			<th>Customer Email</th>
   			<th>Food ID</th>
   			<th>Customer Address</th>
<th>Done</th>
     	</tr>
   		<?php
   		$i=1;
         $sql=mysqli_query($conn,"SELECT assign.orderid,assign.deliEmail,seeorders.order_by,seeorders.address,seeorders.fid FROM assign, seeorders WHERE assign.orderid=seeorders.id AND assign.deliEmail='$deliUser'");

   			if (mysqli_num_rows($sql)) {
   				while ($od=mysqli_fetch_assoc($sql)) {
   					echo "<tr>";
   					echo "<td>".$i."</td>";
   					echo "<td>".$od['orderid']."</td>";
   					echo "<td>".$od['deliEmail']."</td>";
   					echo "<td>".$od['order_by']."</td>";
   					echo "<td>".$od['fid']."</td>";
   					echo "<td>".$od['address']."</td>";
            echo "<td><form method='post'><input type='submit' name='done$i' value='done$i'></form>";

                        if (isset($_POST["done$i"])) {
                          $oid = $od['orderid'];
                          $deliBy = $od['deliEmail'];
                          $deliveredTo = $od['order_by'];
                          $check = mysqli_query($conn,"SELECT orderid FROM deliveredorders WHERE orderid='$oid'");


                          if (mysqli_num_rows($check)==0){
                            $delivered = mysqli_query($conn,"INSERT INTO deliveredorders(orderid,	delivered_by,	delivered_to)VALUES('$oid','$deliBy','$deliveredTo')");
                          }
                          else {
                            echo "already delivered !";
                          }

                          //delete from seeorders
                          $delete = mysqli_query($conn, "SELECT seeorders.id FROM deliveredorders,seeorders WHERE deliveredorders.orderid = seeorders.id");
                          if (mysqli_num_rows($delete)>0) {
                            while ($d = mysqli_fetch_assoc($delete)) {
                              $oid1 = $d['id'];
                              $del = mysqli_query($conn,"DELETE FROM seeorders WHERE id='$oid1'");
                            }

                          }

                        }
   				//	echo "<td>".$od['assign.orderid'];
   					echo "</tr>";
	$i++;

   					}

   				}

   		 ?>
     </table>
   </body>
 </html>
