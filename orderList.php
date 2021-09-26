<?php
require 'admin.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="orderList.css">
     <title></title>
   </head>
   <body>
     <table border="3">
       <tr>
         <th>id</th>
         <th>Food ID</th>
         <th>Image</th>
         <th>Category</th>
         <th>Food</th>
         <th>Quantity</th>
         <th>Total Price</th>
         <th>Address</th>
         <th>Order by</th>
         <th>Order Date</th>
       </tr>
       <?php
          $sql  = mysqli_query($conn,"SELECT * FROM seeorders");
          if (mysqli_num_rows($sql)>0) {
          while ($r = mysqli_fetch_assoc($sql)) {
          $img=  $r['image'];
            echo "<tr>";
            echo "<td>".$r['id']."</td>";
            echo "<td>".$r['fid']."</td>";
            echo "<td><img src='image/$img' height='200' width='200' style='padding:0,margin:1vh 1vw;'></td>";
            echo "<td>".$r['category']."</td>";
            echo "<td>".$r['food']."</td>";
            echo "<td>".$r['quantity']."</td>";
            echo "<td>".$r['totalprice']."</td>";
            echo "<td>".$r['address']."</td>";
            echo "<td>".$r['order_by']."</td>";
            echo "<td>".$r['order_at']."</td>";
            echo "</tr>";
          }
          }
        ?>
     </table>
   </body>
 </html>
