<?php
require 'admin.php';
 $error="";
if (isset($_POST["signup"])) {

  $name = $_POST["name"];
  $_SESSION["name"]=$name;
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $pass1 = $_POST["pass1"];
  $error = array();

if (strlen($name)>10||strlen($name)<3) {
        // code...

        array_push($error,"name must be between 3 and 10");

  }
//password validation
if ($pass==$pass1) {

    if (strlen($pass)<5||strlen($pass)>10) {

      array_push($error,"password should be between 5 and 10<br>");
    }


   }
   elseif($pass!=$pass1) {

       array_push($error,"password does not match<br>");
   }


   //email validation
   if (!preg_match("/@/",$email)) {

     array_push($error,"inavalid email formate<br>");
   }


    if (empty($error)) {
      $check_email = mysqli_query($conn,"SELECT email FROM deleveryman WHERE email = '$email' ");

              if (mysqli_num_rows($check_email)==0) {
              $signup_query = mysqli_query($conn,"INSERT INTO deleveryman (name, email, password)
              VALUES('$name','$email','$pass')");

              echo "Delivery Man added successfully";

              }
              else{
              echo "email in use";
              }
  }


}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="addDeliveryMan.css">
     <title>Add Delivery Man</title>
   </head>
   <body>
     <div class="formfd">


    <!-- Delivery man add-->
     <form class="box2" method="post">
<h2>Assign Delivery Hero</h2>
       <input class="data" type="text" name="name" placeholder="Enter Your User Name">
        <br>
       <input class="data" type="text" name="email" placeholder="Enter Your Email Adress">
        <br>
       <input class="data" type="password" name="pass" placeholder="Enter Your Password">
        <br>
       <input class="data" type="password" name="pass1" placeholder="Re Enter Your Password">
        <br>
        <pre class="lastline" style="alignment:justify;">***By signing up, you are agree
  to abide the terms and conditions.</pre>
       <input type="submit" name="signup" value="SIGNUP">
       <?php print_r($error); ?>
     </form>
     </div>
     <!-- Delivery man add Finish-->

     <!-- View List-->
     <div class="list">
       <table border="1">
         <caption>All Delivery Hero</caption>
         <tr>
           <th>id</th>
           <th>Name</th>
           <th>Email</th>
         </tr>

         <?php

           $view = mysqli_query($conn,"SELECT * FROM deleveryman");
           if (mysqli_num_rows($view)) {
             while ($row=mysqli_fetch_assoc($view)) {
               echo "<tr>";
               echo "<td>".$row['id'];
               echo "<td>".$row['name']."</td>";
               echo "<td>".$row['email']."</td><br>";

               echo "</tr>";

             }
           }
          ?>
       </table>

     </div>
   </body>
 </html>
