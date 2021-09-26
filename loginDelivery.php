<?php
include 'connection.php';
$conn=connect();
session_start();

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="loginDelivery.css">
     <title>Login Delivery Hero</title>
   </head>
   <body>
     <div class="image">
         <img src="images/home-img-2.png" alt="">
          <img src="images/home-img-1.png" alt="">
     </div>
     <div class="log">
       <form  method="post">
         <h2>LOGIN DELIVERY</h2>
         <input type="text" name="deli_email" placeholder="Username">
         <input type="password" name="password" placeholder="Password">
         <input type="submit" name="signin" value="signin">

         <?php
          if (isset($_POST["signin"])) {
            $deli_Email = $_POST["deli_email"];
            $_SESSION["deli_email"] = $deli_Email;
            $password = $_POST["password"];

            $sql=mysqli_query($conn,"SELECT email,password FROM deleveryman WHERE email='$deli_Email'  AND password ='$password'");

            if (mysqli_num_rows($sql)==1) {
              header("Location: deliveryMan.php");
            }


          }

          ?>
       </form>
     </div>
   </body>
 </html>
