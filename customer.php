<?php
include 'connection.php';
$conn = connect();
session_start();

if(isset($_SESSION["vemail"])){
  $user_logged_in = $_SESSION['vemail'];

}
else {
    header("Location: index1.php");
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Panel</title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="customer.css">
        <title></title>
      </head>
      <body >
         <nav  style="height:25vh; background: #059862">
           <div class="item">


           <a class="change" href="#"><?php
              $profile = mysqli_query($conn,"SELECT * FROM users WHERE email='$user_logged_in'");
              if (mysqli_num_rows($profile)==1) {
                  while ($pro = mysqli_fetch_assoc($profile)) {
                    $im=$pro['image'];
                    $_SESSION['image']=$im;
                      echo "<img src='image/$im' height='100' width='100' style='padding:0,margin:1vh 1vw;border-radius: 50%;'></td>";
                  }
              }

            ?></a>
           <a class="change" href="orderLocation.php">Track your Orders</a>
           <a class="change" href="menu.php">Menu</a>
           <a class="change" href="bookSeat.php">Book seat</a>
           <a class="change" href="review.php">Review</a>
           <a class="change" href="cart.php">cart</a>
           <a><?php echo $_SESSION["vemail"]; ?></a>
           <form class="submit" method="post">
               <input type="submit" name="signout" value="signout">
               <?php if (isset($_POST["signout"])) {
                 session_destroy();
               } ?>
           </form>
   </div>
         </nav>

      </body>
    </html>
  </body>
</html>
