<?php
require 'admin.php';
/*include 'connection.php';
$conn = connect();
session_start();
if (isset($_SESSION["uname"])) {
  $store = $_SESSION["uname"];
}
else {
  header("Location: officeLogin.php");
}*/
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Add Category</title>
     <link rel="stylesheet" href="addCategory.css">
   </head>
   <body>
     <div class="bod">

     <form class="add" method="post">
       <input type="text" name="category" placeholder="Food Category">
       <input type="submit" name="create" value="CREATE">
       <?php
       if (isset($_POST["create"])) {
         $cat = $_POST["category"];
         $_SESSION["category"]=$cat;
         $user = $_SESSION["uname"];
         $check = mysqli_query($conn,"SELECT category From category WHERE category='$cat'");
         if (mysqli_num_rows($check)==0) {
           $sql = mysqli_query($conn,"INSERT INTO category(category, add_by) VALUES('$cat','$user')");
         }
         else {
           echo $_SESSION["category"]." added once!";
         }

       }
        ?>
     </form>
</div>
   </body>
 </html>
