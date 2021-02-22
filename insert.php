<?php
	
	include('db_connection.php');

	$username = $_POST['username'];
  	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	
	// echo $username;
	// echo $email;
	// echo $mobile;
	
	$query = "INSERT INTO `user`(`username`, `email`, `mobile`,`password`) VALUES ('$username', '$email', '$mobile','$password')";
	$result = mysqli_query($con,$query);
    $rows = mysqli_affected_rows($con);

    if($rows>0)
    {
    	header('location: login.php');
    }

?>