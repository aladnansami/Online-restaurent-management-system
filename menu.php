<?php
require 'customer.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="menu.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <title></title>
   </head>
   <body class="body">

     <input type="text" name="" placeholder="search here" id="input" style="float:right;margin-left: 10px; margin-right: 80px;margin-top: 20px;padding:1vw 1vh;width:85%;"><br><br><br><br>

     <div class="item12" id="search">


     <?php $see = mysqli_query($conn,"SELECT * FROM food");
     $i = 0;
     if (mysqli_num_rows($see)>0) {

       while ($data = mysqli_fetch_assoc($see)) {


          echo "<form method='post'>";
         $image = $data['image'];

         //$re_img =imagescale ( $image , 30 , 20 );
         echo "<div class='menuform' style='width:200px;background:#CAE7CB;box-shadow: 1px -13px 338px 15px rgba(135,126,123,0.65);float:left;
         display:inline-block;margin:2vh 0.5vw;'>";

         echo "<br>";



         echo "<br>";
         echo "<img src='image/$image' height='200' width='200' style='padding:0,margin:1vh 1vw;'>";
         echo "<p style='margin-left:1vw;'>  Product ID:".$data['id']."</p>";

         echo " <h4 style='color:indianred;margin-left:1vw;'> Category  :".$data['category']."</h4>";

         echo "<p style='margin-left:1vw;'>  Food :".$data['food']."</p>";

         echo "<p style='margin-left:1vw;'>  Price :".$data['price']." </p> ";
         echo "<input type='submit' value='Add to Cart'  name='cart$i' >";

         echo "</div>";

         echo "</form>";

         if (isset($_POST["cart$i"])) {
            $_SESSION["id"]=$data["id"];
            $fid = $_SESSION["id"];
            $_SESSION["food"]=$data["food"];
            $food =$_SESSION["food"];
            $_SESSION["category"]=$data["category"];
            $cat=$_SESSION["category"];
            $_SESSION["price"]=$data["price"];
            $price =  $_SESSION["price"];
            $_SESSION['image']=$data["image"];
            $img = $_SESSION['image'];
            $user = $_SESSION['vemail'];





            $check=mysqli_query($conn,"SELECT fid,cart_by FROM cart WHERE fid='$fid' AND cart_by='$user'");

            if (mysqli_num_rows($check)==0) {
                $cart =mysqli_query($conn,"INSERT INTO cart(fid,category,food,price,cart_by,image) VALUES('$fid','$cat','$food','$price','$user','$img')");
                //header("Location: cart.php");
                if ($cart) {
                  echo "Successfully added  to cart ";
                }
            }
            else {
              echo "<div style='height:5vh;width:5vw;box-shadow: 1px -13px 338px 15px rgba(135,126,123,0.65);float:left;'>";
              echo "Cart added once!";
              echo "</div>";
            }




         }

         $i++;

       }

     }



     ?>
        </div>
   </body>
   <script>
 $(document).ready(function(){
 $("#input").on("keyup", function() {
 var value = $(this).val().toLowerCase();
 $("#search div").filter(function() {
  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
 });
 });
 });
 </script>
 </html>
