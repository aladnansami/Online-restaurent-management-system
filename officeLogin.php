<?php
include 'connection.php';
$conn = connect();
session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="officeLogin.css">
     <title></title>
   </head>
   <body>
     <div class="image">
         <img src="images/home-img-1.png" alt="">
          <img src="images/home-img-3.png" alt="">
     </div>
     <div class="box">


     <form  method="post">
       <h1>ADMIN LOGIN</h1>
       <input type="text" name="uname" placeholder="Enter your Email">
       <input type="password" name="pass3" placeholder="Enter Your Password">
       <input type="submit" name="signin" value="signin">
       <?php
         if (isset($_POST["signin"])) {
           $uname = $_POST["uname"];
           //protecting from sql injection
           $uname=trim($uname);
           $uname = mysqli_real_escape_string($conn,$uname);
           $uname = strip_tags($uname);
           $_SESSION["uname"] = $uname;

           $pass3 = $_POST["pass3"];
           $pass3=trim($pass3);
           $pass3 = mysqli_real_escape_string($conn,$pass3);
           $pass3 = strip_tags($pass3);

           $sql=mysqli_query($conn,"SELECT * FROM admin WHERE name='$uname'  AND password ='$pass3'");

           if (mysqli_num_rows($sql)==1) {
             header("Location: admin.php");
           }
           else {
             echo "Invalid username or password !";
           }
         }
        ?>
     </form>
          </div>
   </body>
 </html>
