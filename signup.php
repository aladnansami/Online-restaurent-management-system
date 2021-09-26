<?php
require 'connection.php';
$conn = connect();
session_start();
 $error="";
if (isset($_POST["signup"])) {
  $fname = $_POST["fname"];
  $fname = strip_tags($_POST["fname"]);//removal html tags
  $fname = str_replace(' ','',$fname);//remove spaces
  $_SESSION["fname"]=$fname;
  $lname = $_POST["lname"];
  $lname = strip_tags($_POST["lname"]);
  $lname = str_replace(' ','',$lname);//remove spaces
  $_SESSION["lname"]=$lname;
  $email = $_POST["email"];
  $email =strip_tags($_POST["email"]);
  $email = str_replace(' ','',$email);//remove spaces
  //$email= trim($email);
  $pass = $_POST["pass"];
  $pass = strip_tags($_POST["pass"]);
  //$pass = trim($pass)
  $pass1 = $_POST["pass1"];
  $error = array();
  $filename = $_FILES["loadfile"]["name"];
  $tempname = $_FILES["loadfile"]["tmp_name"];
  $folder = "image/".$filename;

  //image move
  if (move_uploaded_file($tempname, $folder))  {
   $msg = "Image uploaded successfully";
 }else{
   $msg = "Failed to upload image";
 }
// firstname validation
if (strlen($fname)>10||strlen($fname)<3) {
     // code...

     array_push($error,"firstname must be between 3 and 10");

   }
   //lastname validation
if (strlen($lname)>10||strlen($lname)<3) {
        // code...

        array_push($error,"lastname must be between 3 and 10");

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
      $check_email = mysqli_query($conn,"SELECT email FROM users WHERE email = '$email' ");

              if (mysqli_num_rows($check_email)==0) {
              $signup_query = mysqli_query($conn,"INSERT INTO users (fname,lname, email,image, password)
              VALUES('$fname','$lname','$email','$filename','$pass')");

              if ($signup_query) {
                header("Location: login.php");
              }

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
     <link rel="stylesheet" href="Login1.css">
     <title></title>
   </head>
   <body>
     <div class="image">
         <img src="images/home-img-1.png" alt="">
          <img src="images/home-img-2.png" alt="">
     </div>
     <form class="box" method="post" enctype="multipart/form-data">
       <h1>SignUp</h1>
       <input type="text" name="fname" placeholder="First Name">
       <input type="text" name="lname" placeholder="Last Name">
       <input type="text" name="email" placeholder="Email Address">
       <label class="custom-file-upload">
    Upload Image

      <input type="file" name="loadfile" value="" />
        </label>
       <input type="password" name="pass" value="Password">
       <input type="password" name="pass1" value="Password">
        <pre style="alignment:justify; color:white">***By signing up, you are agree
  to abide the terms and conditions.</pre>
       <input type="submit" name="signup" value="SIGNUP">
       <pre style="alignment:justify; color:white">Already have an account? <a href="login.php">SignIn </a>
       </pre>
       <?php print_r($error); ?>
     </form>
   </body>
 </html>
