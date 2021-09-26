<?php
require 'admin.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="list">
       <table border="1">
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

           $view = mysqli_query($conn,"SELECT * FROM seeorders");
           if (mysqli_num_rows($view)) {
             while ($row=mysqli_fetch_assoc($view)) {
               echo "<tr>";
               echo "<td>".$row['id'];
               echo "<td>".$row['fid']."</td>";
               echo "<td>".$row['image']."</td>";
               echo "<td>".$row['category']."</td>";
               echo "<td>".$row['food']."</td>";

               echo "<td>".$row['quantity']."</td><br>";
               echo "<td>".$row['totalprice']."</td>";
               echo "<td>".$row['address']."</td>";
               echo "<td>".$row['order_by']."</td>";
               echo "<td>".$row['order_at']."</td>";

               echo "</tr>";

             }
           }
          ?>
       </table>

     </div>
   </body>
 </html>
