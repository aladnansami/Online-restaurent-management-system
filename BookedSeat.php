<?php
require 'admin.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="BookedSeat.css">
     <title>Booked Seat</title>
   </head>
   <body>
     <div >
       <table class="center" border="1">
         <caption>Booked Seat List</caption>
         <tr>
           <th>id</th>
           <th>Table ID</th>
           <th>Customer</th>
           <th>Booked For</th>
         </tr>
         <?php
          $bs=mysqli_query($conn,"SELECT * FROM bookedseat");
          if (mysqli_num_rows($bs)) {
            while ($r = mysqli_fetch_assoc($bs)) {
              echo "<tr>";
              echo "<td>".$r['id']."</td>";
              echo "<td>".$r['table_id']."</td>";
              echo "<td>".$r['email']."</td>";
              echo "<td>".$r['booked_for']."</td>";
              echo "</tr>";
            }
          }


          ?>

       </table>

     </div>
   </body>
 </html>
