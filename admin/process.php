<?php
session_start();
include "connection.php";

//get values from login.php
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent sql injection
$username =stripcslashes($username);
$password =stripcslashes($password);
$username = mysqli_real_escape_string ( $connect, $username );
$password = mysqli_real_escape_string ( $connect, $password );

//Query the database for user
$sql ="SELECT username, password FROM connection";
$result = mysqli_query($connect, $sql) or die("Failed to query database" .mysqli_error( $connect));
	while ($row= mysqli_fetch_assoc($result))
	 {
		if ($row['username']==$username && $row['password']==$password)
		 {
			echo "Login sucessfull! Welcome ".$row['username'];
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			header('location: index.php');
			
		}

		else{
			echo "Failed to login";
		}
	}
?>