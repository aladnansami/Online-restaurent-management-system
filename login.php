<?php
include 'connection.php';
$conn = connect();
session_start();

 if (isset($_POST["signin"])) {
   $email = $_POST["vemail"];
   $_SESSION["vemail"] = $email;

   $pass = $_POST["vpass"];
   $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
   $count = mysqli_num_rows($sql);
   if ($count==1) {
     header("Location: customer.php");
		 exit();
   }
 }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Login1.css">

    <title></title>
  </head>
  <body>
    <div class="image">
        <img src="images/home-img-3.png" alt="">
         <img src="images/home-img-2.png" alt="">
    </div>
    <form class="box" method="post">
        <h1>SignIN</h1>
      <input type="text" name="vemail" placeholder="Email Address">
      <input type="password" name="vpass" placeholder="Password">
      <input type="submit" name="signin" value="SIGNIN">
        <a href="signup.php">Don't you have any account?Please,<br> signup here.</a>
      </form>

  </body>
</html>
