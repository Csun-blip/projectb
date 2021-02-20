<?php

include "connection.php";

$user =$_POST['name'];
$hotel_name = $_POST['title'];
$room = $_POST['room'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];



$sql = "INSERT INTO record (SN, name, title, room, checkin, checkout)
VALUES (NULL, '$user', '$hotel_name','$room','$checkin','$checkout')";

mysqli_query($connect,$sql);
header('location:reservation.php');

?>