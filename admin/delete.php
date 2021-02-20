<?php

include"connection.php";

$sn =$_GET['del'];
$sql ="DELETE FROM hoteldetails WHERE SN='$sn'";

$query = mysqli_query($connect,$sql);

	header('location:viewhotel.php');

?>