<?php
include 'connection.php';
$conn=connect();
 session_start();
 if (isset($_SESSION["uname"])) {
   $storeUser = $_SESSION["uname"];
 }
 else {
   header("Location: index1.php");
 }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Admin Panel</title>

     <link rel="stylesheet" href="admin.css">
   </head>
   <body>
 <nav  class="up">



       <a class="topadmin" href="#"><?php if (isset($_SESSION["uname"])) {
         echo $_SESSION["uname"];
       } ?></a>
<div class="value">
       <a class="change" href="AddCategory.php">Add Category</a>
       <a class="change" href="AddFood.php">add Food</a>

       <a class="change" href="BookedSeat.php">Booked Seat</a>
       <a class="change" href="orderList.php">Orders</a>

       <a class="change" href="AddDeliveryMan.php">Add Delivery Man</a>
       <a class="change" href="AssignDelivery.php">Assign delivery</a>
       <a class="change" href="addTable.php">Add Table</a>
       <a class="change" href="deliveredOrder.php">Delivered Orders</a>
       <form  method="post">
         <input type="submit" name="signout" value="SIGNOUT">
         <?php
          if (isset($_POST["signout"])) {
           session_destroy();
          }
         ?>
       </form>
          </div>
   </nav>
   </body>
 </html>
