<?php
require 'customer.php';
 /*include 'connection.php';
 $conn=connect();
 session_start();
 if (isset($_SESSION["vemail"])) {
   $logUser = $_SESSION["vemail"];

 }
 else {
   header("Location: index.php");
 }*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bookSeat.css">
    <title></title>
  </head>
  <body class="bookseat" >
    <center>  <h1 style="color:grey;">Welcome <a href="#"style="color:red;"> <?php echo $_SESSION['vemail']; ?></a>!
        <br> Book seat and enjoy the dishes.</h1></center>
    <div class="book" style="height:40vh;width:30vh;box-shadow:1px 1px 5px 5px solid blue;margin:10vw 10vh;">


    <form class="tablebook" method="post">

      <select  name="tid">
        <?php
          $sql=mysqli_query($conn,"SELECT * FROM tables");
          if (mysqli_num_rows($sql)) {
            while ($row=mysqli_fetch_assoc($sql)) {
              echo "<option>".$row['seatNo'];
            }
          }
         ?>
      </select>
        <br><br>

      <input type="datetime-local" name="bookfor">
      <br><br>
      <input type="submit" name="book" value="book now!">


      <?php

             if (isset($_POST["book"])) {
               $tid = $_POST["tid"];
               $_SESSION['tid']=$tid;
               $email=$_SESSION["vemail"];
               $date=$_POST["bookfor"];
               $check = mysqli_query($conn,"SELECT table_id,booked_for FROM bookedSeat WHERE table_id='$tid' AND booked_for='$date'");

               if (mysqli_num_rows($check)==0) {
                 $sql=mysqli_query($conn,"INSERT INTO bookedSeat(table_id,email,booked_for) VALUES('$tid','$email','$date') ");
                 if ($sql) {

                   echo "<div style='height:7vh;width:10vw;box-shadow: 3px 2px 5px 1px rgba(118,67,229,0.75);'>";


                   echo "<p style='color:grey;margin-left:auto,margin-right:auto;'>successfully booked! your table</p>";
                   echo "</div>";


              /*   $subject = "Welcoming you to our cafee";
                 $txt = "Book the seat";
                 $mailto = $_SESSION['vemail'];
                 $mailfrom = "tahrimkabir321@gmail.com";
                 $headers = "From :".$mailfrom;
                 mail($mailto,$subject,$txt,$headers);
                 if (mail($mailto,$subject,$txt,$headers)) {
                          echo "Email successfully sent to $email...";
                 } else {
                          echo "Email sending failed...";
                 }

               }
               else {
                 echo "<br>This seat has been booked already.";
               }*/


             }

          }
          else {
            echo "Seat already booked";
          }
        }
       ?>
    </form>
      </div>
  </body>
</html>
