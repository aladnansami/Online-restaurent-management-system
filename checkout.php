<?php
require 'customer.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="checkoutmain.css">
     <title></title>
   </head>
   <body>
     <div class="checkout">


       <form  method="post">
         <div class="value">


       <?php
        echo "<h1>Checkout Form</h1>";
        echo "ID : ".$_SESSION["id1"]."<br>";
        echo "FOOD : ".$_SESSION["food1"]."<br>";
        echo "PRICE : ".$_SESSION["price1"]."<br>";
        echo "TOTAL :".$_SESSION["total1"]."<br>";
       ?>
       </div>
       <input type="submit" name="check" value="checkout">
       <?php
          if (isset($_POST["check"])) {

          header("Location: orderForm.php");

          }

        ?>
       </form>

       <form  method="post">

       </form>
     </div>


   </body>
 </html>
