<?php
$username = "root";
$password = "";
$host = "localhost";
$dbname ="admin_con";
$connect = mysqli_connect($host,$username,$password,$dbname);

if (!$connect) {
	die();
}
?>