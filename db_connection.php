<?php

	global $con;

	$hostname = 'localhost'; 		
	$user = 'root'; 				
	$password = ''; 				
	$dbname = 'indore_task'; 						
	$con = new mysqli($hostname,$user,$password,$dbname);
	if (mysqli_connect_errno())
	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		die();
  	}
 ?>