<?php
require 'customer.php';
$sqlp="";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="customer.css">
     <title></title>
   </head>
   <body>
     <table class="center" border="1">
     	<tr>
     		<th>SL</th>
   			<th>Order ID</th>
   			<th>Delivery Email</th>
   			<th>Current location of this order</th>
   			<th>Time</th>


     	</tr>

   		<?php
       $sql= mysqli_query($conn,"SELECT * FROM tracker WHERE order_by='$user_logged_in'");
       $count=mysqli_num_rows($sql);

       if ($count>0) {
         while ($a = mysqli_fetch_assoc($sql)) {
           echo "<td>".$a['id']."</td>";
           echo "<td>".$a['orderid']."</td>";
           echo "<td>".$a['deliEmail']."</td>";
           echo "<td>".$a['deli_city'].",".$a['deli_region'].",".$a['deli_country']."</td>";
           echo "<td>".$a['present_at']."</td>";
           echo "</tr>";
         }
       }


   		 ?>
     </table>
   </body>
 </html>
