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
     <table>
       <tr>
         <th>SL</th>
         <th>Order ID</th>
         <th>Delivered By</th>
         <th>Customer</th>
         <th>Delivered Date</th>
       </tr>
       <?php
        $show = mysqli_query($conn,"SELECT * FROM deliveredorders");
        if (mysqli_num_rows($show)>0) {
          while ($a = mysqli_fetch_assoc($show)) {
            echo "<tr>";
            echo "<td>".$a['id']."</td>";
            echo "<td>".$a['orderid']."</td>";
            echo "<td>".$a['delivered_by']."</td>";
            echo "<td>".$a['delivered_to']."</td>";
            echo "<td>".$a['delivered_at']."</td>";
            echo "</tr>";
          }
        }
        ?>
     </table>
   </body>
 </html>
