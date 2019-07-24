<?php
	include("connection.php");

	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];

	$sql = "INSERT INTO users (name, mobile, password)
	VALUES ('$name','$mobile','$password')";

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
   	 	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	header("Location:search.php")

?>