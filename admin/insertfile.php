<?php

include "connection.php";

$name = $_POST['hname'];
$description = $_POST['hdes'];

//images file
$tmpname = $_FILES['image']['tmp_name'];
$original_name=$_FILES['image']['name'];
$date = date('yyyy-mm-dd-hh-ii-ss').$original_name;
$folder="../images/upload/".$date;
$forimg ="../images/upload/".$date;
move_uploaded_file($tmpname, $folder);


$sql = "INSERT INTO hoteldetails (SN, Title, Description, image,img)
VALUES (NULL, '$name', '$description','$folder','$forimg')";

mysqli_query($connect,$sql);
header('location:hotel.php');

?>