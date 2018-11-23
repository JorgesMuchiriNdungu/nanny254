<?php

include('connection.php');


if(isset($_POST["create"])){

	$full_name = $_POST["full_name"];
	$email = $_POST["email"]; 
    $phone_number = $_POST["phone_number"];
	
	$username = $_POST["username"];
	$hash_password = md5($_POST["password"]);
	$usertype = $_POST["usertype"];

	// $usertype = $_SESSION["usertype"];

	$add_user = "INSERT INTO users2 (full_name, email, phone_number,username, password, usertype) VALUES ('$full_name', '$email', '$phone_number','$username','$hash_password', '$usertype')";
	
	if($conn->query($add_user) === TRUE){
	

		header("Location: viewuser.php");
		exit();
	}else{
		echo "Error: " . $add_user . " ON " . $conn->error;
	}
}
		
		
 
?>