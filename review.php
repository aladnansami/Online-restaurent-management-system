<?php
require 'customer.php'

 ?>


     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <link rel="stylesheet" href="review.css">
         <title></title>
       </head>
       <body>
         <div class="container" style="margin-left:15vw;height:auto;width:60vw;padding:5vh;">


         <div class="review" style="margin:19vh;">


         <form  method="post" enctype="multipart/form-data">
          <!-- <input type="textarea" name="review" placeholder="review here!" style="padding:5vh 15vw ;
           border-radius: 10px 10px 10px 10px;border-style: inset;appearance: textfield;">-->
           <textarea class="textarea" id="textarea" onkeyup="charCount();" name="review"
           rows="5" cols="84.5" maxlength="256" minlength="3" placeholder="Write your description here..." style="
            border-radius: 10px 10px 10px 10px;border-style: inset;appearance: textfield;"></textarea>

           <input type="file" name="up" value=""/ style="float:left;margin-left:1vw;margin-top:2vh;">
           <input type="submit" name="done" value="DONE" style="float:right;margin-right:3vw;margin-top:2vh;">
         </form>
         <?php
         if (isset($_POST["done"])) {
           $user = $_SESSION["vemail"];
           $review = $_POST["review"];
           $fimage = $_FILES["up"]["name"];
           $tempname = $_FILES["up"]["tmp_name"];
           $folder = "image/".$fimage;
           $userImg=$_SESSION['image'];


           //image move
           if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
          }else{
            $msg = "Failed to upload image";
          }

          $ifd = mysqli_query($conn,"SELECT * FROM review WHERE fimage='$fimage'AND review='$review'");
          if (mysqli_num_rows($ifd)==0) {
              $query=mysqli_query($conn,"INSERT INTO review(review,uimage,fimage,review_by)VALUES('$review','$userImg','$fimage','$user')");
              if ($query) {
                echo "success";
              }
          }


         }
          ?>
          </div>
          <div class="show" style="margin:20vh;">
            <?php
            $user=$_SESSION['vemail'];
            $show=mysqli_query($conn,"SELECT * FROM review WHERE review_by='$user' ORDER BY review_at desc");
            if (mysqli_num_rows($show)) {
              while ($review=mysqli_fetch_assoc($show)) {
                $photo=$review['fimage'];
                $uphoto=$_SESSION['image'];
                echo "<div style='display:inline-block;'>";
                echo "<img src='image/$uphoto' height='75' width='75' style='border-radius:50%;padding:0,margin:1vh 1vw;'>".$review['review_by']." at ".$review['review_at'];

                echo "</div>";
                echo "<div style='margin:0;padding:0;height:auto;width:41vw;
border-radius: 10px 10px 10px 10px;'>";
                echo "<br><br>";
                echo "<div style='height:auto;width:41vw;text-align: justify;'>";

                echo "<textarea rows='5' cols='84'style='border-style:none; background:#34495e; color:white; text-align:center;'>".$review['review']."</textarea>";
                echo "<br>";
                echo "</div>";
                echo "<div>";

                 echo "<center><img src='image/$photo' height='200' width='200' style='padding:0,margin:1vh 1vw;'></center>";
                 echo "</div>";

                echo "</div>";
                echo "<br>";
              }
            }
             ?>
          </div>
        </div>
       </body>
       <script type="text/javascript">
		function charCount(){
			var element=document.getElementById('textarea').value.length;
			document.getElementById('textarea_count').innerHTML=element+"/100 (Max Character 100).";
		}
	</script>
     </html>
