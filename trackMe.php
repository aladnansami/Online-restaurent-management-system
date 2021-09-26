<?php
require 'deliveryMan.php';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);
$country="";
$region="";
$city="";

if($result->status=='success'){
	/*echo "Country:".$result->country.'<br/>';
	echo "Region:".$result->regionName.'<br/>';
	echo "City:".$result->city.'<br/>';
	if(isset($result->lat) && isset($result->lon)){
		echo "Lat:".$result->lat.'<br/>';
		echo "Lon:".$result->lon.'<br/>';
	}
	echo "IP:".$result->query.'<br/>';*/

	$country = $result->country;
	$region = $result->regionName;
	$city = $result->city;



}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Track My Location</title>
		<link rel="stylesheet" href="trackMe.css">
	</head>
	<body>
	<div class="">
  <table border="1">
		<h1>Track My Location</h1>
  	<tr>
  		<th>SL</th>
			<th>Order ID</th>
			<th>Delivery Email</th>
			<th>Customer Email</th>
			<th>Food ID</th>
			<th>Customer Address</th>

  	</tr>
		<?php
		$i=1;
      $sql=mysqli_query($conn,"SELECT assign.orderid,assign.deliEmail,seeorders.order_by,seeorders.address,seeorders.fid FROM assign, seeorders WHERE assign.orderid=seeorders.id AND assign.deliEmail='$deliUser'");

			if (mysqli_num_rows($sql)) {
				while ($od=mysqli_fetch_assoc($sql)) {
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$od['orderid']."</td>";
					echo "<td>".$od['deliEmail']."</td>";
					echo "<td>".$od['order_by']."</td>";
					echo "<td>".$od['fid']."</td>";
					echo "<td>".$od['address']."</td>";

				//	echo "<td>".$od['assign.orderid'];
					echo "</tr>";



					if (isset($_POST['locate'])) {
            $oid = $od['orderid'];

						$deliEmail = $od['deliEmail'];
						$cEmail = $od['order_by'];
						$fid = $od['fid'];
						$address = $od['address'];

						$check = mysqli_query($conn,"SELECT orderid FROM tracker WHERE  orderid='$oid' ");
						if (mysqli_num_rows($check)==0) {
							$loc = mysqli_query($conn,"INSERT INTO tracker(deliEmail,orderid,order_by,deli_city,deli_country,deli_region)
							VALUES('$deliUser','$oid','$cEmail','$city','$country','$region')");
						}
						else{

							$update = mysqli_query($conn,"UPDATE tracker SET deli_city='$city',deli_country='$country',deli_region='$region' WHERE deliEmail='$deliUser'");
						}




					}
					$i++;
				}
			}
		 ?>
  </table>

 <form  method="post">
	 <div class="locates">

 	<input type="submit" name="locate" value="locate">

 </div>
 </form>

	</div>
	</body>
</html>
