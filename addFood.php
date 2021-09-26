<?php
require 'admin.php';
//include 'connection.php';
/*$conn = connect();
session_start();
if (isset($_SESSION["uname"])) {
  $store = $_SESSION["uname"];
}
else {
  header("Location: officeLogin.php");
}*/
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Add Food</title>
     <link rel="stylesheet" href="addFood.css">
   </head>
   <body>
     <div class="formvalue">


     <form class="box1" method="post" enctype="multipart/form-data">
       <select  name="category" >

         <?php
            $sql = mysqli_query($conn,"SELECT category FROM category");
            if (mysqli_num_rows($sql)>0) {
              while ($row=mysqli_fetch_assoc($sql)) {

              //  echo "<option value='.$row['category'].'>".$row['category']."</option>";
                echo '<option value="'.$row["category"].'">'.$row["category"].'</option>';
              }
            }
          ?>
       </select>
<br>
       <input type="food" name="food" placeholder="Add Food Name"><br>
       <input type="number" name="price" placeholder="Enter Food Price"><br>
       <input type="file" name="uploadfile" placeholder="Upload Food Image"/><br>
       <input type="submit" name="add" value="Add Food">

        <?php
        //add button
         if (isset($_POST["add"])) {
           $cat = $_POST["category"];
           $food = $_POST["food"];
           $price = $_POST["price"];
           $filename = $_FILES["uploadfile"]["name"];
           $tempname = $_FILES["uploadfile"]["tmp_name"];
           $folder = "image/".$filename;
           $user = $_SESSION["uname"];

           $check = mysqli_query($conn,"SELECT food,category FROM food WHERE food='$food' AND category = '$cat'");


           if (mysqli_num_rows($check)==0) {
               $add = mysqli_query($conn,"INSERT INTO food(category,food,price,image,add_by) VALUES('$cat','$food','$price','$filename','$user')");
           }
           else {
             echo $food.'  already exists in this '.$cat;
           }
          if (move_uploaded_file($tempname, $folder))  {
           $msg = "Image uploaded successfully";
         }else{
           $msg = "Failed to upload image";
         }

       }
       //finish add button
       //update
         ?>
     </form>
   </div>
       <table class="addfoodtable" border="1">
         <caption>All Food</caption>
         <tr>
           <th>SL</th>
          <!-- <th>id</th>-->
           <th>category</th>
           <th>food</th>
           <th>price</th>
           <th>image</th>
           <th>Action</th>
         </tr>
         <?php
            $see = mysqli_query($conn,"SELECT * FROM food");
              $i=0;
            if (mysqli_num_rows($see)>0) {
              while ($data = mysqli_fetch_assoc($see)) {



                $image = $data['image'];
                //$re_img =imagescale ( $image , 30 , 20 );

                echo "<tr>";
              //  echo "<form method='POST'>";
                echo "<td>".$i."</td>";
              //  echo "<td>".$data['id']."</td>";
                echo "<td>".$data['category']."</td>";
                echo "<td>".$data['food']."</td>";
                echo "<td>".$data['price']."</td>";
                echo "<td>"."<img src='image/$image' height='200' width='200' >"."</td>";
                echo "<form method='post'>";
                echo "<td>"."<input type='submit'value='delete'name='delete$i'>"."</td>";
                echo "</form>";

                if (isset($_POST["delete$i"])) {
                  $id = $data['id'];
                  $cat = $data['category'];
                  $price = $data['price'];
                  $food = $data['food'];

                  $del = mysqli_query($conn, "DELETE FROM food WHERE id ='$id'");
                }
                echo "</tr>";

                echo "<br>";
                $i++;

              }
            }
            //delete

          ?>

       </table>


   </body>
 </html>
