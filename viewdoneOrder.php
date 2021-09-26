<?php
require 'customer.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div >
       <table border="1">
         <tr>
           <th>id</th>
           <th>Food</th>
           <th>Quantity</th>
            <th>Transaction</th>

         </tr>
         <?php
          $user = $_SESSION['vemail'];
          $sql = mysqli_query($conn,"SELECT * FROM seeorders WHERE order_by='$user'");
          if (mysqli_num_rows($sql)) {
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
