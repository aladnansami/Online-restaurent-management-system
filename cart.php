<?php
require 'customer.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="cart.css">
     <title></title>
   </head>
   <body>

      <div class="showCart">
            <form class="abc" method="post">

        <table class="center" border="1">
          <tr>
          <!--  <th>select</th>-->
            <th>Product ID</th>
            <th>Category</th>
              <th>Price</th>
              <th>Food</th>
              <th>Image </th>



              <th>Quantity </th>
              <th>ORDER</th>
              <th>REMOVE</th>
          </tr>
          <?php
          $user=$_SESSION["vemail"];
          $i=1;
          $c=1;
            $sql = mysqli_query($conn,"SELECT * FROM cart WHERE cart_by='$user'");
            if (mysqli_num_rows($sql)>0) {
              while ($row=mysqli_fetch_assoc($sql)) {
                $img =$row['image'];
               $rid = $row['id'];
                echo "<tr>";
              //  echo "<td><input type='checkbox' name=select[] value=' $rid'></td>";

                echo "<td>".$row['id']."</td>";

                //echo '<input type="hidden"name="id" value=".$rid.">';

                echo "<td>".$row['category']."</td>";
                echo "<td>".$row['food']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td><img src='image/$img' height='200' width='200' style='padding:0,margin:1vh 1vw;'></td>";
                echo "<form method=post>";
                echo "<td><input type='number'   name='count' value='0' style='float:right;margin-bottom:1vh;margin-right:1vw;margin-left:5px;' required></td>";

                echo "<td><input type='submit' value='Order Now'  name='order$i' style='float:right;margin-bottom:1vh;margin-right:1vw;margin-left:10px;'></td>";

                echo "<td><input type='submit' value='delete'  name='delete$i' style='float:right;margin-bottom:1vh;margin-right:1vw;margin-left:10px;'></td>";
                echo "</form>";

                if (isset($_POST["order$i"])) {


                  $user = $_SESSION["vemail"];
                  $id = $row['id'];
                  $_SESSION['id1']=$id;
                  $fid = $row['fid'];
                  $_SESSION['fid1']=$fid;
                  $cat = $row['category'];
                  $_SESSION['category1']=$cat;
                  $food = $row['food'];
                  $_SESSION['food1']=$food;
                  $price = $row['price'];
                  $_SESSION['price1']=$price;
                  $count = $_POST['count'];
                  $_SESSION['count1']=$count;
                  $total1= $price*$count;
                  $_SESSION['total1']=$total1;
                  $img1= $row["image"];
                  $_SESSION['image1']=  $img1;

               if ($count>0) {
                  //  header("Location: checkout.php");
                  echo "<script> window.location.replace('checkout.php')</script>";
                  }
               else {
                    echo "select quantity please";
                  }



                  }
                  //delete from cart
                  if (isset($_POST["delete$i"])) {
                    $user = $_SESSION["vemail"];
                    $id = $row['id'];
                    $_SESSION['id1']=$id;
                    $fid = $row['fid'];
                    $_SESSION['fid1']=$fid;
                    $food = $row['food'];
                    $_SESSION['food1']=$food;
                    $price = $row['price'];
                    $_SESSION['price1']=$price;
                  //  $count = $_POST['count'];
                  //  $total1= $price*$count;
                  //  $_SESSION['total1']=$total1;
                    $del = mysqli_query($conn, "DELETE FROM cart WHERE id ='$id' ");
                  }

              // order all







                  echo "</tr>";

                  echo "<br>";

                $i++;
              }


            }

           ?>


           </tr>



        </table>

         <input type="submit" name="order" value="ORDER NOW">

             <?php

                 ?>
         </form>

      </div>
   </body>
 </html>
