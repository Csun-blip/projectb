<?php

include"connection.php";

$sn =$_GET['del_booking'];
$sql ="DELETE FROM record WHERE SN='$sn'";

$query = mysqli_query($connect,$sql);

	header('location:reservation.php');

?>