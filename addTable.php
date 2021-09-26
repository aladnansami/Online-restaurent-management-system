<?php
require 'admin.php';

if (isset($_POST['add'])) {
 $table = $_POST['table'];

 $check = mysqli_query($conn,"SELECT seatNo FROM tables WHERE seatNo='$table'");
 if (mysqli_num_rows($check)==0) {
   $query = mysqli_query($conn,"INSERT INTO tables(seatNo)VALUES('$table')");
 }
 else {
   echo "already you have added !";
 }
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form  method="post">
       <input type="text" name="table" placeholder="000-(0 people)">
       <input type="submit" name="add" value="add">
     </form>

     <table>
       <tr>
         <th>SL</th>
         <th>Table ID</th>
         <th>Delete</th>
       </tr>

       <?php
       $i=0;
          $query = mysqli_query($conn,"SELECT * FROM tables");
          if (mysqli_num_rows($query)>0) {
            while ($a = mysqli_fetch_assoc($query)) {
              echo "<tr>";
              $seat =$a['seatNo'];
               echo "<td>".$a['id']."</td>";
               echo "<td>".$a['seatNo']."</td>";
               echo "<td><form method='post'><input type='submit' value='remove' name='remove$i'></form></td>";
               echo "</tr>";

               if (isset($_POST["remove$i"])) {
                 $delete = mysqli_query($conn,"DELETE FROM tables WHERE seatNo ='$seat'");
               }
               $i++;
            }
          }


        ?>


     </table>
   </body>
 </html>
