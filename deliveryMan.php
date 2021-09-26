<?php
include 'connection.php';
$conn=connect();
session_start();
if (isset($_SESSION["deli_email"])) {
 $deliUser=$_SESSION["deli_email"];
}
else {
  header("Location: index1.php");
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="deliveryMan.css">
     <title>Delivery Hero Panel</title>
   </head>
   <body>
     
     <nav  style="height:12vh; background: #059862">
       <div class="item2">


       <a class="change1" href="#"><?php echo $_SESSION["deli_email"]; ?></a>
       <a class="change1" href="toDeliver.php">orders to deliver</a>
       <a class="change1" href="trackMe.php">Track me</a>
       <form  method="post">
         <input type="submit" name="signout" value="signout">
         <?php if (isset($_POST["signout"])) {
            session_destroy();
         } ?>
       </form>
 </div>
     </nav>
   </body>
 </html>
